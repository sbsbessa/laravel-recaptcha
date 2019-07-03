<?php

/**
 *
 * Biscolab Laravel ReCaptcha - helpers
 * MIT License @ https://github.com/biscolab/laravel-recaptcha/blob/master/LICENSE
 * author: Roberto Belotti - info@robertobelotti.com
 * web : robertobelotti.com, github.com/biscolab
 *
 */

if (!function_exists('recaptcha')) {
    /**
     * @return Biscolab\ReCaptcha\ReCaptchaBuilder
     */
    function recaptcha()
    {
        return app('recaptcha');
    }
}

/**
 * call ReCaptcha::htmlScriptTagJsApi()
 * Write script HTML tag in you HTML code
 * Insert before </head> tag
 *
 * @param $formId required if you are using invisible ReCaptcha
 */
if (!function_exists('htmlScriptTagJsApi')) {

    /**
     * @return Biscolab\ReCaptcha\ReCaptchaBuilder::htmlScriptTagJsApi()
     */
    function htmlScriptTagJsApi($formId = '', $callback = 'biscolabLaravelReCaptcha')
    {
        return ReCaptcha::htmlScriptTagJsApi($formId, $callback);
    }
}

/**
 * call ReCaptcha::htmlFormButton()
 * Write HTML <button> tag in your HTML code
 * Insert before </form> tag
 *
 * Warning! Using only with ReCAPTCHA INVISIBLE 
 * @param $buttonInnerHTML What you want to write on the submit button
 */
if (!function_exists('htmlFormButton')) {

    /**
     * @return Biscolab\ReCaptcha\ReCaptchaBuilder::htmlFormButton()
     */
    function htmlFormButton($buttonInnerHTML = 'Submit', $callback = 'biscolabLaravelReCaptcha')
    {
        return ReCaptcha::htmlFormButton($buttonInnerHTML, $callback);
    }
}

/**
 * call ReCaptcha::htmlFormSnippet()
 * Write ReCAPTCHA HTML tag in your FORM
 * Insert before </form> tag
 *
 * Warning! Using only with ReCAPTCHA v2
 */
if (!function_exists('htmlFormSnippet')) {

    /**
     * @return Biscolab\ReCaptcha\ReCaptchaBuilder::htmlFormSnippet()
     */
    function htmlFormSnippet()
    {
        return ReCaptcha::htmlFormSnippet();
    }
}

