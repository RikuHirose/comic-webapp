<?php
namespace App\Helpers\Production;

use App\Helpers\SeoHelperInterface;

class SeoHelper implements SeoHelperInterface
{
    public function __construct(
    ) {
    }

    public function setIndexSeo()
    {
        $title       = trans('seo.index.title');

        $description = trans('seo.index.description');

        $keyWords = trans('seo.index.keywords');

        return $this->setSeoText($title, $keyWords, $description);
    }

    // Comics
    public function setComicsIndexSeo()
    {
        $title       = trans('seo.comics.index.title');
        $description = trans('seo.comics.index.description');
        $keyWords    = trans('seo.index.keywords');

        return $this->setSeoText($title, $keyWords, $description);
    }

    public function setComicsShowSeo($model)
    {
        $appName      = config('app.name');
        $title        = trans('seo.comics.show.title', [
            'comicName' => $model->comic_name
        ]);
        $description  = trans('seo.comics.show.description', [
            'comicName' => $model->comic_name,
            'count'     => count($model->applications)
        ]);
        $keyWords     = $model->comic_name.','.$model->writer_name.','.trans('seo.index.keywords');

        $imageTwitter  = $model->img_url;
        $imageFacebook = $model->img_url;

        return $this->setSeo($title, $keyWords, $description, $imageFacebook, $imageTwitter);
    }

    public function setDefaultSeo()
    {
        $appName     = config('app.name');
        $title       = trans('seo.index.title');
        $description = trans('seo.index.description');

        $keyWords        = trans('seo.index.keywords');
        $imageTwitter    = config('app.url').'/images/logo.jpg';
        $imageFacebook   = config('app.url').'/images/logo.jpg';
        $twitterCardType = 'summary_large_image';

        empty($twitterCardType) ?: \Twitter::setType($twitterCardType);

        empty($title) ?: \SEOMeta::setTitle($title, false);
        empty($title) ?: \OpenGraph::setTitle($title);
        empty($title) ?: \Twitter::setTitle($title);

        empty($keyWords) ?: \SEOMeta::setKeywords($keyWords);

        empty($description) ?: \SEOMeta::setDescription($description);
        empty($description) ?: \OpenGraph::setDescription($description);
        empty($description) ?: \Twitter::setDescription($description);

        empty($imageFacebook) ?: \OpenGraph::addImage($imageFacebook);
        empty($imageTwitter) ?: \Twitter::setImage($imageTwitter);
    }

    public function setSeo($title, $keyWords, $description, $imageFacebook, $imageTwitter)
    {
        $this->setSeoText($title, $keyWords, $description);
        empty($imageFacebook) ?: \OpenGraph::addImage($imageFacebook);
        empty($imageTwitter) ?: \Twitter::setImage($imageTwitter);
    }

    public function setSeoText($title, $keyWords, $description)
    {
        empty($title) ?: \SEOMeta::setTitle($title, false);
        empty($title) ?: \OpenGraph::setTitle($title);
        empty($title) ?: \Twitter::setTitle($title);

        empty($keyWords) ?: \SEOMeta::setKeywords($keyWords);

        empty($description) ?: \SEOMeta::setDescription($description);
        empty($description) ?: \OpenGraph::setDescription($description);
        empty($description) ?: \Twitter::setDescription($description);
    }
}
