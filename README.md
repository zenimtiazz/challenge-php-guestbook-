# Title: PHP Guestbook
## Date : 03-11-2021

## Tools and languages used

|  | Description |
| ----------- | ----------- |
| ![ubuntu](IMG/ubuntu.png) | Running Ubuntu 20.04 |
| ![php](IMG/php-logo.jpg) | Main language used is PHP |
| ![git](IMG/git.png) | Using git for version control |
| ![github](IMG/github.png) | Hosting my files on github |
## Must-have features
- Posts must have the following attributes:
    * Title ✔️
    * Date ✔️
    * Content ✔️
    * Author name ✔️

- Use at least 2 classes: PostLoader & Post ✔️
- The messages are sorted from new (top) to old (bottom). ✔️
- Make sure the script can handle [site defacement attacks](https://en.wikipedia.org/wiki/Website_defacement): use [htmlspecialchars()](https://www.php.net/htmlspecialchars) ✔️
- Only show the latest 20 posts.✔️

To keep a good overview of the code we recommend separating the view (html code) as much as possible from the PHP code. ✔️
- Write your footer and header HTML code and `require()` them in your template files in separate files to avoid repeating HTML code.✔️
- What to work with json_encode: check out https://www.php.net/manual/en/jsonserializable.jsonserialize.php ✔️
- Want to work with serialize: check out https://www.php.net/manual/en/language.oop5.magic.php#object.serialize ✔️


## Nice to have features  ❌
- Profanity filter: at the top of your script create an array of "bad" words. If somebody tries to enter a message with those words, their messages gets rejected. ❌

- When the user enters uses a "smily" like ":-)", ";-)", ":-(" replace it with an image of such a smily.✔️ 11:27 it just worked
