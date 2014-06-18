<?php 
class CL_gestion_article 
{
	public function getArticleDemo(){
		$article = new CL_article();
		$article->setName("ARTICLE DEMO");
		return $article;
	}

	public function getListArticle(){


	}
}
?>