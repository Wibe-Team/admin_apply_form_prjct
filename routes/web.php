<?php
use Illuminate\Http\Request;
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

/**
 * FRONTEND ROUTES
 */

Route::get('/', function () {
    return view('front.front');
});
Route::get('/mail-forwarding-synopsis', function () {
    return view('front.mail-forwarding-synopsis');
});
Route::get('/mail-forwarding-the-process', function () {
    return view('front.mail-forwarding-the-process');
});
Route::get('/plans-that-grow-with-you', function () {
    return view('front.plans-that-grow-with-you');
});
Route::get('/security-measures-and-privacy-protocols', function () {
    return view('front.security-measures-and-privacy-protocols');
});
Route::get('/faqs-for-mail-forwarding', function () {
    return view('front.faqs-for-mail-forwarding');
});
Route::get('/incoming-shipments', function () {
    return view('front.incoming-shipments');
});
Route::get('/outgoing-shipments', function () {
    return view('front.outgoing-shipments');
});
Route::get('/transporation-management-systems', function () {
    return view('front.transporation-management-systems');
});
Route::get('/business-logistics-solutions', function () {
    return view('front.business-logistics-solutions');
});
Route::get('/description-of-services', function () {
    return view('front.description-of-services');
});
Route::get('/order-fulfillment-services', function () {
    return view('front.order-fulfillment-services');
});
Route::get('/fulfillement-by-amazon', function () {
    return view('front.fulfillement-by-amazon');
});
Route::get('/quality-control', function () {
    return view('front.quality-control');
});
Route::get('/plan-customizing', function () {
    return view('front.plan-customizing');
});
Route::get('/consulting-services', function () {
    return view('front.consulting-services');
});
Route::get('/discover', function () {
    return view('front.discover');
});
Route::get('/customer-endorsements', function () {
    return view('front.customer-endorsements');
});
Route::get('/why-choose-us', function () {
    return view('front.why-choose-us');
});
Route::get('/technology-and-advancements', function () {
    return view('front.technology-and-advancements');
});
Route::get('/our-environmental-plan', function () {
    return view('front.our-environmental-plan');
});
Route::get('/contact-us', function () {
    return view('front.contact-us');
});
Route::get('/my-account', function () {
    return view('front.my-account');
});
Route::get('/terms-of-service-and-privacy-policy ', function () {
    return view('front.terms-of-service-and-privacy-policy ');
});
Route::get('/forgot-password', function () {
    return view('front.forgot-password');
});
Route::get('/forgot-username', function () {
    return view('front.forgot-username');
});
Route::get('/unsubscribe', function () {
    return view('front.unsubscribe');
});
Route::get('/usps-1583-instructions', function () {
    return view('front.usps-1583-instructions');
});
//Route::get('/', function () {
//    return view('front.front');
//});
//Route::get('/coming-soon', function () {
//    return view('front.coming-soon');
//});
//Route::get('/contact-us', function () {
//    return view('front.contact-us');
//});
//Route::get('/our-key-principles', function () {
//    return view('front.our-key-principles');
//});
//Route::get('/referral-partnerships', function () {
//    return view('front.referral-partnerships');
//});
//Route::get('/term-of-service', function () {
//    return view('front.tos');
//});
//Route::get('/who-is-hubgeo', function () {
//    return view('front.about-us');
//});
/*Route::get('/discover-the-world-with-us', function () {
    return view('front.discover-the-world-with-us');
});
Route::get('/careers', function () {
    return view('front.careers');
});
Route::get('/order-processing', function () {
    return view('front.order-processing');
});
Route::get('/our-special-features', function () {
    return view('front.our-special-features');
});
Route::get('/artificial-intelligence', function () {
    return view('front.artificial-intelligence');
});
Route::get('/web-based-software', function () {
    return view('front.web-based-software');
});
Route::get('/commerce-edi', function () {
    return view('front.commerce-edi');
});
Route::get('/empowering-developers', function () {
    return view('front.empowering-developers');
});
Route::get('/fulfillment-by-amazon', function () {
    return view('front.fulfillment-by-amazon');
});
Route::get('/international-fulfillment', function () {
    return view('front.international-fulfillment');
});
Route::get('/crowdfunding-fulfillment', function () {
    return view('front.crowdfunding-fulfillment');
});
Route::get('/order-fulfillment-for-startups', function () {
    return view('front.order-fulfillment-for-startups');
});
Route::get('/e-commerce-fulfillment', function () {
    return view('front.e-commerce-fulfillment');
});
Route::get('/retail-fulfillment', function () {
    return view('front.retail-fulfillment');
});
Route::get('/services-beyond-order-fulfillment', function () {
    return view('front.services-beyond-order-fulfillment');
});
Route::get('/pricing', function () {
    return view('front.pricing');
});
Route::get('/distribution-warehousing', function () {
    return view('front.distribution-warehousing');
});
Route::get('/password-recovery', function () {
    return view('front.forgot-password');
});
Route::get('/username-recovery', function () {
    return view('front.forgot-username');
});
Route::get('/request-a-quote', function () {
    return view('front.request-a-quote');
});
*/

Route::post('/request-a-quote', function (Request $request) {
    $first_name = $request->first_name;
    $last_name = $request->last_name;
    $company_name = $request->company_name;
    $email = $request->email;
    $phone = $request->phone;
    $web_site = $request->web_site;
    $license = $request->license;
    $fein = $request->fein;
    $business_structure = $request->business_structure;
    $month_type = $request->month_type;
    $shipping_type = $request->shipping_type;
    $SKU_type = $request->SKU_type;
    $checkbox_rules = $request->checkbox_rules;
    $remember = $request->remember;

    $recipient = env('ADMIN_EMAIL');
    if (!empty($email)) {
        $to = $recipient;
        $subject = 'Request a quote from ' . $email;
        $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p><b>E-mail:</b>  ' . $email . '</p> 
                        <p><b>First+Last Name:</b>  ' . $first_name . ' ' . $last_name . '</p>  
                        <p><b>Company name:</b>  ' . $company_name . '</p>  
                        <p><b>Phone:</b>  ' . $phone . '</p>  
                        <p><b>Web site:</b>  ' . $web_site . '</p>  
                        <p><b>Licence:</b>  ' . $license . '</p>  
                        <p><b>FEIN:</b>  ' . $fein . '</p>  
                        <p><b>Business structure:</b>  ' . $business_structure . '</p>  
                        <p><b>Month type:</b>  ' . $month_type . '</p>                        
                        <p><b>Shipping type:</b>  ' . $shipping_type . '</p>                        
                        <p><b>SKU type:</b>  ' . $SKU_type . '</p>                        
                        <p><b>Rules:</b>  ' . $checkbox_rules . '</p>                        
                        <p><b>Remember:</b>  ' . $remember . '</p>                        
                    </body>
                </html>';
        $headers = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: ".$email.">\r\n";
        $result = mail($to, $subject, $message, $headers);
        if ($result) {
            echo json_encode([
                'status' => 'success'
            ]);
        } else {
            echo json_encode([
                'status' => 'error'
            ]);
        }
}
});

Route::get('/unsubscribe', function () {
    return view('front.unsubscribe');
});

Route::post('/subscribe', function (Request $request) {
    $recipient = env('ADMIN_EMAIL');
    if (!empty($request->email)) {
        $to = $recipient;
        $subject = 'Subscribe request from ' . $request->email;
        $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p><b>E-mail:</b>  ' . $request->email . '</p>                       
                    </body>
                </html>';
        $headers = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: ".$request->email.">\r\n";
        $result = mail($to, $subject, $message, $headers);
        if ($result) {
            echo json_encode([
                'status' => 'success'
            ]);
        } else {
            echo json_encode([
                'status' => 'error'
            ]);
        }
    }
})->name('subscribe');


Route::post('/contact-us', function (Request $request) {
    $recipient = env('ADMIN_EMAIL');
    if (isset($request->name) && isset($request->message) && !empty($request->email)) {
        $to = $recipient;
        $subject = 'Contact request from '.env('COMPANY_NAME');
        $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p><b>Name:</b>      ' . $request->name . '</p>
                        <p><b>E-mail:</b>  ' . $request->email . '</p>                        
                        <p><b>Phone:</b>  ' . $request->phone . '</p>                        
                        <p><b>Message:</b>  ' . $request->message . '</p>                        
                        <p><b>Inquery type:</b>  ' . $request->inquiry_type . '</p>                        
                    </body>
                </html>';
        $headers = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: ".$request->name." <".$request->email.">\r\n";
        $result = mail($to, $subject, $message, $headers);
        if ($result) {
            echo json_encode([
                'status' => 'success'
            ]);
        } else {
            echo json_encode([
                'status' => 'error'
            ]);
        }
    }
})->name('contact-us');

Route::post('/sign-up', function (Request $request) {
    $recipient = env('ADMIN_EMAIL');
    if (isset($request->name) && ($request->email != "")) {
        $to = $recipient;
        $subject = 'SignUp request from '.env('COMPANY_NAME');
        $message = '
                <html>
                    <head>
                        <title>' . $request->subject . '</title>
                    </head>
                    <body>
                        <p><b>Name:</b>         ' . $request->name . '</p>
                        <p><b>Username:</b>     ' . $request->username . '</p>
                        <p><b>Password:</b>     ' . $request->password . '</p>
                        <p><b>E-mail:</b>       ' . $request->email . '</p>  
                        <p><b>Adress 1:</b>     ' . $request->adress1 . '</p>
                        <p><b>Adress 2:</b>     ' . $request->adress2 . '</p>
                        <p><b>Country:</b>      ' . $request->country . '</p>
                        <p><b>City:</b>         ' . $request->city . '</p>
                        <p><b>State:</b>        ' . $request->state . '</p>
                        <p><b>Zip:</b>          ' . $request->zip . '</p>
                        <p><b>Phone:</b>        ' . $request->phone . '</p>                        
                        <p><b>Website:</b>      ' . $request->website . '</p>                        
                    </body>
                </html>';
        $headers = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: ".$request->name." <".$request->email.">\r\n";
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            echo json_encode([
                'status' => 'success'
            ]);
        } else {
            echo json_encode([
                'status' => 'error'
            ]);
        }
    }
})->name('sign-up');

/*Route::group(['prefix' => 'booklet'], function () {
    Route::get('/booklet1', function () {
        return view('front.booklet.booklet1');
    });
    Route::get('/booklet2', function () {
        return view('front.booklet.booklet2');
    });
    Route::get('/booklet3', function () {
        return view('front.booklet.booklet3');
    });
});*/

/**
 * FRONTEND ROUTES END
 */


/**
 * BACKEND ROUTES
 */
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'apply-form-88'], function () {
    Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'Admin\DashboardController@index']);
    /**
     * FORMS
     */
    Route::get('/dashboard/forms/add', ['as' => 'admin.forms.add', 'uses' => 'Admin\FormsController@create']);
    Route::post('/dashboard/forms/store', ['as' => 'admin.forms.store', 'uses' => 'Admin\FormsController@store']);
    Route::get('/dashboard/forms/{form}/edit/{type?}', ['as' => 'admin.forms.edit', 'uses' => 'Admin\FormsController@edit']);
    Route::patch('/dashboard/forms/{form}/update/{type?}', ['as' => 'admin.forms.update', 'uses' => 'Admin\FormsController@update']);
    Route::get('/dashboard/forms/{form}/deactivate/{type?}', ['as' => 'admin.forms.onOff', 'uses' => 'Admin\FormsController@onOff']);
    Route::get('/dashboard/forms/{type?}', ['as' => 'admin.forms', 'uses' => 'Admin\FormsController@index']);

    /**
     * TRANSFERS
     */
    Route::get('/dashboard/profiles/transfer/{form_id?}', ['as' => 'admin.profiles.transfer', 'uses' => 'Admin\TransferController@index']);
    Route::post('/dashboard/profiles/transfer/{form?}', ['as' => 'admin.profiles.transfer', 'uses' => 'Admin\TransferController@transfer']);

    /**
     * PROFILES
     */
    Route::get('/dashboard/profiles/{profile}/delete/{type?}', ['as' => 'admin.profiles.delete', 'uses' => 'Admin\ProfilesController@delete']);
    Route::get('/dashboard/profiles/{profile}/edit/{type?}', ['as' => 'admin.profiles.edit', 'uses' => 'Admin\ProfilesController@edit']);
    Route::patch('/dashboard/profiles/{profile}/update/{type?}', ['as' => 'admin.profiles.update', 'uses' => 'Admin\ProfilesController@update']);
    Route::get('/dashboard/profiles/{type?}/{search_phrase?}/{form_id?}', ['as' => 'admin.profiles', 'uses' => 'Admin\ProfilesController@index']);

    });

Route::get('/form/{link}', ['as' => 'forms.link', 'uses' => 'Front\FormsController@link']);
Route::post('/form/{link}', ['as' => 'profiles.store', 'uses' => 'Front\FormsController@store']);

/**
 * BACKEND ROUTES END
 */

Route::post('/upload-file', ['as' => 'upload-file', 'uses' => 'Front\FormsController@uploadFile']);
Route::post('/upload-img', ['as' => 'upload-img', 'uses' => 'Front\FormsController@uploadImage']);
/**
 * AUTH ROUTES
 * Override default scaffold laravel routes
 */
Route::get('/apply-form-88/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/apply-form-88/login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Register the typical email verification routes for an application.
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');