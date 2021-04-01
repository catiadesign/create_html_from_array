# Create HTML from PHP Array
With this function you can create Html very easy from an PHP Array.<br/>
<li>Sample, Easy & Efficient structure.</li>
<li>User friendly - pass Array and get started</li>

# Usage

## How to use:

The Tag Element must have before the `?` question mark.

Call the function

```php
$phpArray = array(
	array(
	    "?div" => "div1",
	    "class" => "test",
	    "style" => "position: relative;",
	    "fn" => array(
		function() {
		    return array(
			array("?div" => "div1child",
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
			array("?div" => "div1child",
			    array(
				"?input" => "",
				"type" => "submit",
				"value" => "name",
				"class" => "name",
				"style" => "width: 100%;"
			    ),
			),
			array("?div" => "div1child", "style" => "text-align: center; color: #494948; padding: 5px;",
			    array("?output" => "", "name" => "name"),
			),            
		    );
		},                
	    ),
	    array(
		"?div" => "div1child",
		"class" => "name",
		"style" => "position: relative;",                    
		array(
		    "?div" => "div2child",
		    array(
			"?div" => "div3child",
		    ),
		),
	    ),
	),
	array(
	    "?div" => "div2",
	),
);

CreateHtml($phpArray);


