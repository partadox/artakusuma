<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $experience  = $this->exp->list();
        $publication = $this->pub->list();
        $blog        = $this->blog->list();
        $porto       = $this->porto->list();
        $porto_cat   = $this->porto->list_category();

        $data        = [
            'experience'    => $experience,
            'publication'   => $publication,
            'porto'         => $porto,
            'porto_cat'     => $porto_cat,
            'blog'          => $blog
        ];
        return view('core',$data);
    }

    // public function porto()
    // {
    //     //Portfolio ID
	// 	$uri            = new \CodeIgniter\HTTP\URI(current_url(true));
    //     $queryString    = $uri->getQuery();
    //     $params         = [];
    //     parse_str($queryString, $params);

    //     if (count($params) == 1 && array_key_exists('id', $params)) {
    //         $id           = $params['id'];
    //         if (ctype_digit($id)) {
    //             $id           = $params['id'];
    //         }else {
    //             return redirect()->to(base_url('404'));
    //         }
    //     } else {
    //         return redirect()->to(base_url());
    //     }
    //     $all_porto   = $this->porto->list();
    //     $porto       = $this->porto->find($id);

    //     if ($id <= count($all_porto)) {
    //         $data = [
    //             'page'      => 'portfolio',
    //             'title'     => $porto['title'],
    //             'porto'     => $porto,
    //         ];
    //     } else {
    //         return redirect()->to(base_url('404'));
    //     }

    //     return view('page',$data);
    // }

    // public function blog()
    // {
    //     //Portfolio ID
	// 	$uri            = new \CodeIgniter\HTTP\URI(current_url(true));
    //     $queryString    = $uri->getQuery();
    //     $params         = [];
    //     parse_str($queryString, $params);

    //     if (count($params) == 1 && array_key_exists('id', $params) || array_key_exists('keyword', $params)) {

    //         if (array_key_exists('id', $params)) {
    //             $id           = $params['id'];
    //             if (ctype_digit($id)) {
    //                 $id         = $params['id'];
    //                 $blog       = $this->blog->find($id);
    //             }else {
    //                 return redirect()->to(base_url('404'));
    //             }
    //         } 
    //         // elseif (array_key_exists('keyword', $params)) {
    //         //     $keyword        = $params['keyword'];
    //         // }

            
    //     } else {
    //         return redirect()->to(base_url());
    //     }

    //     $all_blog   = $this->blog->list();

    //     if ($id <= count($all_blog)) {
    //         $data = [
    //             'page'      => 'blog',
    //             'title'     => $blog['title'],
    //             'blog'      => $blog,
    //         ];
    //     } else {
    //         return redirect()->to(base_url('404'));
    //     }

    //     return view('page',$data);
    // }

    
}
