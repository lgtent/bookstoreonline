<?php
use Illuminate\Http\Request;
use App\Book;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//page route
Route::get('/homepage', 'Client\PageController@homepage');
Route::get('/shop', 'Client\PageController@shop');
Route::get('/checkout', 'Client\PageController@checkout');
Route::get('/books/{id}', 'Client\PageController@detail');
Route::get('/signin', 'Client\LoginController@getSigninPage');
Route::post('/signin', 'Client\SigninController@postSignin');
Route::post('/signin/check-email', 'Client\SigninController@checkEmailExisted');
Route::post('/login', 'Client\LoginController@login');
Route::get('/logout', 'Client\LoginController@logout');
Route::post('search', 'Client\SearchController@postSearch');

//cart route
Route::get('/show-book-in-modal/{id}', 'Client\CartController@showBookInModal');
Route::post('add-to-cart', 'Client\CartController@addtocart');
Route::post('checkout/cart/update', 'Client\CartController@update');
Route::post('checkout/cart/delete', 'Client\CartController@delete');
Route::get('checkout/cart', 'Client\CartController@getCartView');
//checkout
Route::get('checkout/information', 'Client\CheckoutController@information');
Route::post('checkout/information', 'Client\CheckoutController@storeOrder');

//account
Route::get('/account/order', 'Client\UserBoardController@getOrder');
Route::get('/account/order/{id}/delete', 'Client\UserBoardController@deleteOrder');
Route::get('/account/information', 'Client\UserBoardController@getAccountEdit');
Route::post('/account/information/update', 'Client\UserBoardController@postAccountEdit');
Route::get('/account/purcharsed-books', 'Client\UserBoardController@getPurcharsedBook');

//comment
Route::post('books/{id}/sendcomment', 'Client\BookController@postComment');
Route::post('books/{id}/sendquestion', 'Client\BookController@postQuestion');

Route::group(['prefix'=>'admin'], function(){
	Route::get('logout', 'Admin\AdminLoginController@logout');
	//book route ------------------------------------------------------

	Route::get('/', function(){
		return redirect('admin/books');
	});

	Route::post('book-search', 'Admin\BookController@search');

	Route::get('book-search', 'Admin\BookController@getSearch');

	Route::get('warehouse', 'Admin\BookController@getIndex');

	Route::get('books/new', 'Admin\BookController@getAddBook');

	Route::post('books/new', 'Admin\BookController@postAddBook');

	Route::get('books/edit/{id}', 'Admin\BookController@getEditBook');

	Route::post('books/edit/{id}', 'Admin\BookController@postEditBook');

	//author route ------------------------------------------------------
	Route::get('author', 'Admin\AuthorController@index');
	Route::post('author/store', 'Admin\AuthorController@store');
	Route::get('author/{id}/edit', 'Admin\AuthorController@edit');
	Route::get('author/{id}/delete', 'Admin\AuthorController@delete');

	//translator route ------------------------------------------------------
	Route::get('translator', 'Admin\TranslatorController@index');
	Route::post('translator/store', 'Admin\TranslatorController@store');
	Route::get('translator/{id}/edit', 'Admin\TranslatorController@edit');
	Route::get('translator/{id}/delete', 'Admin\TranslatorController@delete');

	//nph route ------------------------------------------------------

	Route::post('books/nph-search', 'Admin\NPHController@search');

	Route::get('books/nph-search', 'Admin\NPHController@getSearch');

	Route::get('books/nph/{id}', 'Admin\NPHController@getEdit');

	Route::post('books/nph/{id}', 'Admin\NPHController@postEdit');

	Route::get('books/nph/del/{id}', 'Admin\NPHController@delete');

	Route::get('books/nph', 'Admin\NPHController@getIndex');

	Route::post('books/nph', 'Admin\NPHController@postIndex');

	//nxb route ------------------------------------------------------

	Route::post('books/nxb-search', 'Admin\NXBController@search');

	Route::get('books/nxb-search', 'Admin\NXBController@getSearch');

	Route::get('books/nxb/{id}', 'Admin\NXBController@getEdit');

	Route::post('books/nxb/{id}', 'Admin\NXBController@postEdit');

	Route::get('books/nxb/del/{id}', 'Admin\NXBController@delete');

	Route::get('books/nxb', 'Admin\NXBController@getIndex');

	Route::post('books/nxb', 'Admin\NXBController@postIndex');


	//language route ------------------------------------------------------
	Route::get('language', 'Admin\LanguageController@index');
	Route::post('language/store', 'Admin\LanguageController@store');
	Route::get('language/{id}/edit', 'Admin\LanguageController@edit');
	Route::get('language/{id}/delete', 'Admin\LanguageController@delete');

	//age route ------------------------------------------------------
	Route::get('age', 'Admin\AgeController@index');
	Route::post('age/store', 'Admin\AgeController@store');
	Route::get('age/{id}/edit', 'Admin\AgeController@edit');
	Route::get('age/{id}/delete', 'Admin\AgeController@delete');

	//topic route ------------------------------------------------------
	Route::get('topic', 'Admin\TopicController@index');
	Route::post('topic/store', 'Admin\TopicController@store');
	Route::get('topic/{id}/edit', 'Admin\TopicController@edit');
	Route::get('topic/{id}/delete', 'Admin\TopicController@delete');

	//category route ------------------------------------------------------
	Route::get('category', 'Admin\CategoryController@index');
	Route::post('category/store', 'Admin\CategoryController@store');
	Route::get('category/{id}/edit', 'Admin\CategoryController@edit');
	Route::get('category/{id}/delete', 'Admin\CategoryController@delete');
	
	//user route
	Route::get('users', 'Admin\UsersController@getUser');
	//order route
	Route::get('orders', 'Admin\OrderController@getOrder');

	Route::get('orders/{id}', 'Admin\OrderController@getOrderDetail');

	Route::get('orders/{id}/shipping', 'Admin\OrderController@postShipping');

	Route::get('orders/{id}/succeed', 'Admin\OrderController@postSucceed');

	//comment managemant route
	Route::get('comments', 'Admin\CommentController@getCommentList');
	Route::get('comments/accept/{id}', 'Admin\CommentController@acceptComment');
	Route::get('comments/delete/{id}', 'Admin\CommentController@deleteComment');

	//question route
	Route::get('questions', 'Admin\QuestionController@getQuestionList');
	Route::post('questions/{id}/answer', 'Admin\QuestionController@postAnswer');
	Route::get('questions/{id}/delete', 'Admin\QuestionController@deleteQuestion');

	//banner route
	Route::get('advertiserment', 'Admin\AdvController@getIndex');
	Route::get('advertiserment/create', 'Admin\AdvController@getCreate');
	Route::post('advertiserment/ajax-search', 'Admin\AdvController@ajaxSearch');
	Route::post('advertiserment/create', 'Admin\AdvController@postAdvertiserment');
	Route::get('advertiserment/edit/{id}', 'Admin\AdvController@getEdit');
	Route::post('advertiserment/edit/{id}', 'Admin\AdvController@postEdit');
	Route::get('advertiserment/delete/{id}', 'Admin\AdvController@getdelete');

	//dashboard route
	Route::get('dashboard', 'Admin\DashboardController@getIndex');

	//supplier route
	Route::get('supplier', 'Admin\SupplierController@index');
	Route::get('supplier/{id}', 'Admin\SupplierController@edit');

	//goods receipt order
	Route::get('goods-receipt-order', 'Admin\GoodsReceiptOrderController@index');
	Route::get('goods-receipt-order/create', 'Admin\GoodsReceiptOrderController@create_view');
	Route::post('goods-receipt-order/create-recept', 'Admin\GoodsReceiptOrderController@create');
	Route::post('goods-receipt-order/create/map-table', 'Admin\GoodsReceiptOrderController@mapTable');
	Route::post('goods-receipt-order/create/add-list', 'Admin\GoodsReceiptOrderController@addList');
});


Route::get('/cart-test', function(){
	// Cart::destroy();
	//Cart::restore('1');
	//dd(User::get());
	//$book = Cart::content()->where('id', 7)->first();
	dd(Cart::content());
	//Cart::store(1);
});

Route::get('{object}/{id}', 'Client\SearchController@searchByObject');
