### This is a simple and lightweight String manipulation library
***It is a work in progress and features will be added often***

install with composer: <br>
```
composer require abdellahramadan/string
```

```
use AbdellahRamadan\String\Strings;
```
**Slug a text**

```
$text = Strings::slug("this is a simple slug");

echo $text; // this-is-a-simple-slug
```

**Make a text lowercase**
```
$text = Strings::lowercase("I will be MADE A LOWERCASE");

echo $text; // i will be made a lowercase
```

**Search a word**
```
$sentence = "I want to find a word";

Strings::contains($sentence, "find"); // true
```

**Add a prefix**
```
$text = "is a cool language";

echo $completeText = Strings::prefix($text, "PHP"); // PHP is a cool language
```

And much more...

### More string manipulations is being Added

### Testing
Test is available in the test folder and can be run with:
``` 
vendor/bin/phpunit
```

### Contributing
Contributions are welcome :smiley: 

### Licence
___
MIT Licence