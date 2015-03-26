# this uses the official zendesk rubygem: https://github.com/zendesk/zendesk_api_client_rb
 
class SupportController < ApplicationController
  skip_before_filter :verify_authenticity_token
 
  def twilio_inbound
    raise "Invalid Twilio Account Id" unless params[:AccountSid] == $twilio_account_id
 
    raise "Invalid :from number" unless from_number = params[:From]
    raise "Invalid message :body" unless body = params[:Body]
 
    from_number.gsub!(/^\+1/, '')
 
    # there may be many hits. this will just return one.
    user = User.find_by(phone_normalized: /#{from_number}/)
 
    email = user.email
 
    #users = client.users.search(query: email)
    # note #to_a seems to infinite loop
    user = $zendesk.users.search(query: email).first ||
        $zendesk.users.create(name: user.name, email: email, verified: true)
 
    raise "Zendesk User #{email} not found" unless user.present?
 
    unless user['verified'] == true
      logger.warn "Zendesk: verifying user #{email}"
      # this doesn't work!
      user.update(verified: true)
    end
 
    #now we enter the scope of said user:
    user = ZendeskAPI::Client.new do |config|
      config.url = "https://samedayshield.zendesk.com/api/v2"
      config.username = "#{email}/token:"
      config.password = "g0C38xg6GYxKEZKMYryfLKyUFUQ5mCGewseVkXdk"
      require 'logger'
      config.logger = Logger.new(STDOUT)
    end
 
    logger.warn "Zendesk: authenticating #{email}"
 
 
    comment = {value: body}
    # todo: sort order has no effect! whatever.
    #if ticket = user.requests(sort_by: 'created_at', sort_order: 'desc').last
    if ticket = user.requests.last
      ticket.comment = comment
      ticket.priority = 'urgent'
    else
      ticket = user.requests.create(subject: body[0..80], comment: comment, priortiy: 'urgent')
    end
 
    ticket.save
 
    render json: ticket.to_json
  end
 
 
end