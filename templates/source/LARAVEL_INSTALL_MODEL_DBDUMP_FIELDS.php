{{@ ../property_type_Checkbox}}
		`{{$ ../name/__value__/__lowercase_text__}}` CHAR(1) NOT NULL DEFAULT '0',
{{@ ../property_type_Date}}
		`{{$ ../name/__value__/__lowercase_text__}}` DATE DEFAULT NULL,
{{@ ../property_type_DateTime}}
		`{{$ ../name/__value__/__lowercase_text__}}` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
{{@ ../property_type_Selection}}
		`{{$ ../name/__value__/__lowercase_text__}}` CHAR(1) NOT NULL DEFAULT '0',
{{@ ../property_type_EmailAddress}}
		`{{$ ../name/__value__/__lowercase_text__}}` VARCHAR(255) DEFAULT NULL,
{{@ ../property_type_FileList}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@ ../property_type_HTMLEditor}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@ ../property_type_ImageList}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@ ../property_type_Integer}}
		`{{$ ../name/__value__/__lowercase_text__}}` INTEGER NOT NULL DEFAULT '0',
{{@ ../property_type_Location}}
		`{{$ ../name/__value__/__lowercase_text__}}` VARCHAR(255) DEFAULT NULL,
{{@ ../property_type_LongText}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@ ../property_type_ClassSelection}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@ ../property_type_Number}}
		`{{$ ../name/__value__/__lowercase_text__}}` DOUBLE NOT NULL DEFAULT '0.0',
{{@ ../property_type_Password}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,
{{@ ../property_type_PhoneNumber}}
		`{{$ ../name/__value__/__lowercase_text__}}` VARCHAR(255) DEFAULT NULL,
{{@ ../property_type_Radio}}
		`{{$ ../name/__value__/__lowercase_text__}}` BIGINT UNSIGNED NOT NULL DEFAULT '0',
{{@ ../property_type_ShortText}}
		`{{$ ../name/__value__/__lowercase_text__}}` VARCHAR(255) DEFAULT NULL,
{{@ ../property_type_Switch}}
		`{{$ ../name/__value__/__lowercase_text__}}` CHAR(1) NOT NULL DEFAULT '0',
{{@ ../property_type_Time}}
		`{{$ ../name/__value__/__lowercase_text__}}` TIME NOT NULL DEFAULT '00:00:00',
{{@ ../property_type_URLAddress}}
		`{{$ ../name/__value__/__lowercase_text__}}` TEXT DEFAULT NULL,