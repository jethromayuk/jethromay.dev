---
extends: _layouts.post
section: content
title: "Testing Mails Using The Command Line"
date: 2021-08-02T12:46:00+02:00
categories: [laravel]
---

Sometimes you might need to test Laravel mails using the command line, to see if they are being sent/received.

I will often use <a href="https://a.paddle.com/v2/click/103161/122770?link=2106" class="text-niagara hover:underline" target="_blank">Tinkerwell</a> and <a href="https://a.paddle.com/v2/click/103161/122770?link=2990" class="text-niagara hover:underline" target="_blank">HELO</a> for this but you can also use ```php artisan tinker``` and your regular email client.

Simply paste in the following snippet and update the email address to send the email:

```bash
Mail::raw('Test Mail', function($msg) {
    $msg->to('email@example.com')->subject('Test Mail');
});
```

If you are on PHP 7.4 +, you can simplify the above using short arrow functions:

```bash
Mail::raw('Test Mail', fn($msg) => $msg->to('email@example.com')
    ->subject('Test Mail'));
```

After running the above snippet you will receive an email if everything has worked correctly:

<figure>
    <img src="/assets/images/successful-email.png" alt="A test email sent using the code snippet." loading="lazy">
    <figcaption>A test email sent using the code snippet.</figcaption>
</figure>
