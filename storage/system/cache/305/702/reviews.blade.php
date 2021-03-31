<?php 
/* C:\xampp\htdocs\damasco\themes\tastyigniter-orange/_pages/local\reviews.blade.php */
class Pagic6063a4c45b6de242450329_6833d147d0f513e77cc4bd690b69959bClass extends \Main\Template\Code\PageCode
{

public function onStart()
{
    if (!View::shared('showReviews')) {
        flash()->error(lang('igniter.local::default.review.alert_review_disabled'))->now();

        return Redirect::to($this->controller->pageUrl($this['localReview']->property('redirectPage')));
    }
}

}
