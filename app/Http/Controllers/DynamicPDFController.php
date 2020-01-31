<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Article;
use Category;
use Session;
use PDF;

class DynamicPDFController extends Controller
{
    public function get_article_data_by_id( $id){

        $article=DB::table('article')
                ->where('article_id',$id)
                ->first();
        $data = array();
        $data['article_id']=$article->article_id;
        $data['article_title']=strip_tags($article->article_title);
        $data['article_description']=strip_tags($article->article_description);
        $data['author_name']=$article->author_name;
        
        $pdf = PDF::loadView('dynamic_pdf',$data);
        return $pdf->download('journal.pdf');
    }

    public function get_journal_data_by_id($id){

    	$journal=DB::table('userjournal')
    			->where('journal_id',$id)
    			->first();
    	$data = array();
    	$data['journal_id']=$journal->journal_id;
    	$data['journal_title']=strip_tags($journal->journal_title);
    	$data['journal_description']=strip_tags($journal->journal_description);
    	$data['user_author_name']=$journal->user_author_name;
    	
            $pdf = PDF::loadView('dynamicpdf_journal',$data);
            return $pdf->download('journal.pdf');
    }   
    
}
