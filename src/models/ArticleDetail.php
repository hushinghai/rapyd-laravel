<?php namespace Zofe\Rapyd\Models;

/**
 * ArticleDetail
 */
class ArticleDetail extends \Eloquent
{

	protected $table = 'demo_article_detail';

    public function article() {
        return $this->belongsTo('Zofe\Rapyd\Models\Article');
    }

}