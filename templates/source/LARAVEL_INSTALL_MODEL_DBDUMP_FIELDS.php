{{@if {{$ ../property_type/__value__}} == "Checkbox"}}
		`{{$ ../name/__value__/__lowercase_text__}}` CHAR(1) NOT NULL DEFAULT '0',
{{@elseif {{$ ../property_type/__value__}} == "Date"}}
		`{{$ ../name/__value__/__lowercase_text__}}` DATE DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "DateTime"}}
		`{{$ ../name/__value__/__lowercase_text__}}` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
{{@elseif {{$ ../property_type/__value__}} == "Selection"}}
		`{{$ ../name/__value__/__lowercase_text__}}` CHAR(1) NOT NULL DEFAULT '0',
{{@elseif {{$ ../property_type/__value__}} == "EmailAddress"}}
		`{{$ ../name/__value__/__lowercase_text__}}` VARCHAR(255) DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "FileList"}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "HTMLEditor"}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "ImageList"}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "Integer"}}
		`{{$ ../name/__value__/__lowercase_text__}}` INTEGER NOT NULL DEFAULT '0',
{{@elseif {{$ ../property_type/__value__}} == "Location"}}
		`{{$ ../name/__value__/__lowercase_text__}}` VARCHAR(255) DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "LongText"}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "ClassSelection"}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "Number"}}
		`{{$ ../name/__value__/__lowercase_text__}}` DOUBLE NOT NULL DEFAULT '0.0',
{{@elseif {{$ ../property_type/__value__}} == "Password"}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "PhoneNumber"}}
		`{{$ ../name/__value__/__lowercase_text__}}` VARCHAR(255) DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "Radio"}}
		`{{$ ../name/__value__/__lowercase_text__}}` BIGINT UNSIGNED NOT NULL DEFAULT '0',
{{@elseif {{$ ../property_type/__value__}} == "ShortText"}}
		`{{$ ../name/__value__/__lowercase_text__}}` VARCHAR(255) DEFAULT NULL,
{{@elseif {{$ ../property_type/__value__}} == "Switch"}}
		`{{$ ../name/__value__/__lowercase_text__}}` CHAR(1) NOT NULL DEFAULT '0',
{{@elseif {{$ ../property_type/__value__}} == "Time"}}
		`{{$ ../name/__value__/__lowercase_text__}}` TIME NOT NULL DEFAULT '00:00:00',
{{@elseif {{$ ../property_type/__value__}} == "URLAddress"}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,

{{@endif}}