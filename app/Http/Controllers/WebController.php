<?php

namespace App\Http\Controllers;

use App\Support\Seo;
use Illuminate\Http\Request;

class WebController extends Controller
{  public function home ()
{
 $head= $this->seo->render(
        env('APP_NAME').' - '.env('APP_DESCRIPTION'),
        'Na calmaria de um bosque encantado, onde o tempo parece ter parado, as árvores sussurram histórias antigas com suas folhas dançantes ao vento. Um pequeno riacho serpenteia por entre as pedras cobertas de musgo, refletindo os raios de sol que escapam pelas copas altas. No centro do cenário, uma raposa de pelagem avermelhada observa atenta, como se guardasse o segredo de um mundo desconhecido. Ao longe, um som suave de pássaros completa a harmonia do lugar, tornando-o um refúgio perfeito para quem busca se perder na simplicidade e na magia da natureza.',
        url('/'),
    asset('images/img_bg_1.jpg'));

     return view("front.home",['head' =>$head
     ]);
}
    public function course()
    {
        $head= $this->seo->render(
            env('APP_NAME').' - '.env('Sobre o curso'),
    'O curso de Desenvolvimento Web oferece uma imersão prática e teórica no universo da tecnologia. Com um conteúdo abrangente, os alunos aprendem desde fundamentos de HTML, CSS e JavaScript até conceitos avançados, como desenvolvimento de aplicações com frameworks modernos como Vue.js e Node.js. Além disso, o curso aborda o uso de bancos de dados como MongoDB e a integração com serviços na nuvem, como Firebase. Ideal para quem deseja se destacar na área, o programa combina aprendizado prático com projetos reais, proporcionando uma base sólida para ingressar no mercado de trabalho como desenvolvedor web.',
         route('course'),
            asset('images/img_bg_1.jpg'));



        return view('front.course',
            ['head' =>$head
        ]);
    }
    public function article()
    {
        $head= $this->seo->render(
            env('APP_NAME').' - '.env('Sobre o  artigo'),
            'Descrição sobre o article',
            route('article'),
            asset('images/img_bg_1.jpg'));


        return view("front.article",
        ['head' =>$head]);
    }

    public function blog()
    {
        $head= $this->seo->render(
            env('APP_NAME').' - '.env('Sobre blog'),
            'Decrição sobre o Blog',
            route('blog'),
            asset('images/img_bg_1.jpg'));
        return view('front.blog',
        ['head' =>$head]);
    }

    public function contact()
    {
        $head= $this->seo->render(
            env('APP_NAME').' - '.env('Sobre  contacto'),
            ' descrição sobre os contatos ',
            route('contact'),
            asset('images/img_bg_1.jpg'));
        return view('front.contact',
            ['head' =>$head]);
    }



}
