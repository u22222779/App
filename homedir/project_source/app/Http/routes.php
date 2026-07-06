<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::group(['middleware' =>'NoLogin'],function(){
    	Route::get('/',[
            'as'    => 'inicio',
            'uses'  =>  'WebController@inicio'
        ]);

        Route::get('/actividad',[
            'uses'  =>  'WebController@actividad',
            'as'    =>  'titulares'
        ]);

        Route::get('/titulares',[
            'uses'  =>  'WebController@titulares',
            'as'    =>  'titulares'
        ]);

        Route::get('/noticia/{id}',[
            'uses'  =>  'WebController@noticia',
            'as'    =>  'noticia.vista'
        ]);

        Route::get('/nosotros',[
            'uses'  =>  'WebController@nosotros',
            'as'    =>  'nosotros'
        ]);


        Route::get('/agricola',[
            'uses'  =>  'WebController@cultura',
            'as'    =>  'cultura'
        ]);

    	Route::get('/contacto',function(){
            return view('secciones.contacto')->with('mensaje',null);
    	});

        Route::post('/contacto',[
            'as'    =>  'contacto',
            'uses'  =>  'WebController@contacto',
        ]);

    });

	Route::get('/traslate/{lang}',[
		'as'    =>  'traslate',
		'uses'  =>  'LenguajeController@switchLang',
	]);

	Route::group(['prefix' => 'system','middleware'=>'auth'],function(){
        Route::get('/',function(){
            return view("system");
        });
        Route::group(['prefix' => 'categorias'],function(){
    		Route::get('/',[
                'uses'  =>  'CategoriasController@index',
                'as'    =>  'categorias.index'
            ]);
            Route::post('/',[
                'uses'  =>  'CategoriasController@store',
                'as'    =>  'categorias.store'
            ]);
            Route::get('/create',[
                'uses'  =>  'CategoriasController@create',
                'as'    =>  'categorias.create'
            ]);
            Route::get('/mostrar/{id}',[
                'uses'  =>  'CategoriasController@mostrar',
                'as'    =>  'categorias.mostrar'
            ]);
            Route::get('/{categoria}/edit',[
                'uses'  =>  'CategoriasController@edit',
                'as'    =>  'categorias.edit'
            ]);
            Route::post('/update/{categoria}',[
                'uses'  =>  'CategoriasController@update',
                'as'    =>  'categorias.update'
            ]);
            Route::get('/destroy/{id}',[
                'uses'  =>  'CategoriasController@destroy',
                'as'    =>  'categorias.destroy'
            ]);
        });
        Route::group(['prefix' => 'noticias'],function(){
            Route::get('/',[
                'uses'  =>  'NoticiaController@index',
                'as'    =>  'noticias.index'
            ]);
            Route::post('/',[
                'uses'  =>  'NoticiaController@store',
                'as'    =>  'noticias.store'
            ]);
            Route::get('/create',[
                'uses'  =>  'NoticiaController@create',
                'as'    =>  'noticias.create'
            ]);
            Route::get('/mostrar/{id}',[
                'uses'  =>  'NoticiaController@mostrar',
                'as'    =>  'noticias.mostrar'
            ]);
            Route::get('/{noticias}/edit',[
                'uses'  =>  'NoticiaController@edit',
                'as'    =>  'noticias.edit'
            ]);
            Route::post('/update/{noticia}',[
                'uses'  =>  'NoticiaController@update',
                'as'    =>  'noticias.update'
            ]);
            Route::get('/destroy/{id}',[
                'uses'  =>  'NoticiaController@destroy',
                'as'    =>  'noticias.destroy'
            ]);
        });
	});

});


Route::get('/decrypt/{id}', function($id)
    {                      
        //$id = Hashids::encode();
        $numbers = Hashids::decode($id);
        var_dump($numbers[0]);
        echo $numbers[0];
        //var_dump($id, $numbers);
        // We're done here - how easy was that, it just works!

        //Hashids::decode('doyouthinkthatsairyourebreathingnow');
        // This example is simple and there are far more methods available.
    });