$zendesk = ZendeskAPI::Client.new do |config|
  config.url = "samedayshield.zendesk.com/api/v2" 

  config.username = "akbrandon.howard@live.com"

  config.password = "asdfrawr1"

  require 'logger'
  config.logger = Logger.new(STDOUT)
end
