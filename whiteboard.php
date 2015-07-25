<?php require_once 'app/init.php'; 
if (!Auth::check()) redirect_to(App::url());

 

APRHeader::update(Auth::user()->id, 'test', 1);
APRFooter::update(Auth::user()->id, 'test', 1);
APRThemes::update(Auth::user()->id, 'test', 1);
APRMenu::update(Auth::user()->id, 'test', 1);
APRColors::update(Auth::user()->id, 'test', 1);
APRSocialMedia::update(Auth::user()->id, 'test', 1);
APRGeneral::update(Auth::user()->id, 'test', 1);
APRCustomCssJs::update(Auth::user()->id, 'test', 1);
PagesManage::update(Auth::user()->id, 'test', 1);
PagesContent::update(Auth::user()->id, 'test', 1);
Media::update(Auth::user()->id, 'test', 1);
WebsiteSettings::update(Auth::user()->id, 'test', 1);
BusinessInfo::update(Auth::user()->id, 'test', 1);
GlobalThemes::update(Auth::user()->id, 'test', 1);
GlobalCategories::update(Auth::user()->id, 'test', 1);
GlobalShortcodes::update(Auth::user()->id, 'test', 1);
BlogManage::update(Auth::user()->id, 'test', 1);
BlogContent::update(Auth::user()->id, 'test', 1);
BlogSettings::update(Auth::user()->id, 'test', 1);
BlogOther::update(Auth::user()->id, 'test', 1);

?>

