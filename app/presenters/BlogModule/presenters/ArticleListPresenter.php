<?php declare(strict_types = 1);

namespace App\BlogModule\Presenters;

use Nette\Application\UI\Presenter;


class ArticleListPresenter extends Presenter
{

    public function actionDefault()
    {
        $this->link(':Blog:ArticleDetail:');
    }

}
