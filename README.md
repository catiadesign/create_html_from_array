# Create HTML from PHP Array
With this function you can create Html very easy from an PHP Array.<br/>
<li>Sample, Easy & Efficient structure.</li>
<li>User friendly - pass Array and get started</li>

# Usage

## How to use:

Call the function

`CreateHtml(array(`
        `array(
            "?div" => "name",
            "class" => "test",
            "style" => "position: relative;",
            "fn" => array(
                function() {
                    return array(
                        array("?div" => "name",
                            array(
                                "?input" => "",
                                "type" => "submit",
                                "value" => "name",
                                "class" => "name",
                                "style" => "width: 100%;"
                            ),
                        ),
                        array("?div" => "", "style" => "text-align: center; color: #494948; padding: 5px;",
                            array("?output" => "", "name" => "name"),
                        ),            
                    );
                },
                function() {
                    return array(
                        array("?div" => "name",
                            array(
                                "?input" => "",
                                "type" => "submit",
                                "value" => "name",
                                "class" => "name",
                                "style" => "width: 100%;"
                            ),
                        ),
                        array("?div" => "name", "style" => "text-align: center; color: #494948; padding: 5px;",
                            array("?output" => "", "name" => "name"),
                        ),            
                    );
                },                
            ),
            array(
                "?div" => "3",
                "class" => "name",
                "style" => "position: relative;",                    
                array(
                    "?div" => "4",
                    array(
                        "?div" => "5",
                    ),
                ),
            ),
            array(
                "?div" => "3",
                array(
                    "?div" => "4",
                    array(
                        "?div" => "5",
                    ),
                ),
            ),
        ),
        array(
            "?div" => "2",
        ),
));
`
Assign `keyword to search` to varible `$search_keyword`
```php
$search_keyword = "keyword";                            // search Keyword
```

Enter `table names` & their repective `column names` in an associative array `$table_ass_array` to search the `given keyword`.
```php

$table_ass_array = array( 
			'TABLE NAME 1' => array( 			// TABLENAME 1 to search in
						'COLUMNNAME_A',			// Column Name A to search in
						'COLUMNNAME_B'			// Column Name B to search in
						),
			'TABLE NAME 2' => array(			// TABLENAME 2 to search in
						'COLUMNNAME_A',			// Column Name A to search in
						'COLUMNNAME_B'			// Column Name B to search in
						)
			);
```

Call this awesome function `php_search_all_database("Keyword to search", "Table name array")` as below
```php
php_search_all_database($search_keyword, $table_ass_array);       // call this Awesomme function
```
