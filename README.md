yii2-mailchimp
==============

Yii2 MailChimp extension.

This is the most dirt simple extension you could ever imagine, literally this is how you use it:

    $mc = new sammaye\mailchimp\Mailchimp(['apikey' => 'lalala']);
    $mc->lists->getList();

The class is merely a layer that calls `__call` on everything that comes in and passes it to the actual Mailchimp API wrapper.

Please refer to the documentation for...documentation: [here](http://apidocs.mailchimp.com/api/2.0/).

For support please post an [issue](https://github.com/Sammaye/yii2-mailchimp/issues).

To find the Mailchimp API wrapper you can go to [Bitbucket](https://bitbucket.org/mailchimp/mailchimp-api-php).
