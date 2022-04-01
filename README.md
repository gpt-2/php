# GPT-2 class for PHP
[GPT-2](https://gpt-2.com) API class for PHP

With GPT-2.COM fine-tuned model you can generate unique articles in many affiliate marketing niches, for SEO needs such as: PBN, Link Wheels, Doorways, etc ... 


## Installation
You can copy /src/gpt2.com.php to any place in your project

## Requirements
Edit your php.ini
```php 
allow_url_fopen = On
max_execution_time = 50
```
## Setup GPT-2.COM account
1. register on [GPT-2.COM](https://gpt-2.com)
2. select plan and add API units to your account. You can get free coupon for testing in [telegram channel](https://t.me/gpt_2)
3. get your User ID and API key in dashboard
## Usage 

Replace YOUR_USER_ID and YOUR_API_KEY with your GPT-2.COM account values 

```php 

include_once "src/gpt2com.php";

$gpt2= new gpt2com;
$gpt2->user_id="YOUR_USER_ID";
$gpt2->api_key="YOUR_API_KEY";

echo $gpt2->generate("Online casino gambling, in the past few years, has become a multi billion dollar industry");
echo "\n";

```
## Output Example 

Online casino gambling, in the past few years, has become a multi billion dollar industry.

The reasons that makes it very popular are because, in reality, these people did not know that the Internet was a very small and fast market. Whilst in previous times, people needed the Internet for the opportunity to gamble at their own leisure in order to earn money. Today, the online casino gambling has taken over in many countries and is still a multi billion dollar industry.

Though casinos are one of the few places where in you can now make a bankroll at anytime, the chances of winning money almost is very small. At one time, the thought of winning money from your own home was not such high.

However, the internet has given rise to new online casinos who specialize in placing bets. Today, various online casinos have emerged as the most choice able medium emerging as the largest revenue maker of the gambling industry.

Benefits of online gambling

There are various advantages of online gambling. One of the main advantages is its simplicity in terms of mechanics. You need not have to insert coins, push buttons, and pull handles. The online casino sites act like a manual online game center. You don't have to wait in a queue to play, just drag your mouse. Online casino sites also offer a great social networking environment to raise a few friends and provide feedback on how good they are. The feedback you get is always excellent and it really shows that you care.

Another advantage is that you can gamble online. It is also more convenient in the long run. Since the advent of the internet, we are no longer limited to the computer, and now are able to play at anytime and anywhere. Unlike the land casinos, you don't have to travel anywhere to get your way to. You can just log on, select your favorite game and play your favorite game online. Playing online saves you the time and allows you to enjoy the game with less worries
