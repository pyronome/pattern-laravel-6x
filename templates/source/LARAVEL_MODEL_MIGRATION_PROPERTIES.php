{{@if {{$ ../property_type/__value__}} == "Checkbox"}}
			$table->smallInteger('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "Date"}}
			$table->date('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "DateTime"}}
			$table->dateTime('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "Selection"}}
			$table->smallInteger('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "EmailAddress"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "FileList"}}
			$table->longText('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "HTMLEditor"}}
			$table->longText('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "ImageList"}}
			$table->longText('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "Integer"}}
			$table->bigInteger('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "Location"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "LongText"}}
			$table->longText('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "Number"}}
			$table->double('{{$ ../name/__value__/__lowercase_text__}}', 8, 2);
{{@elseif {{$ ../property_type/__value__}} == "ClassSlection"}}
			$table->longText('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "Password"}}
			$table->longText('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "PhoneNumber"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "Radio"}}
			$table->bigInteger('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "ShortText"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "Switch"}}
			$table->smallInteger('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "Time"}}
			$table->time('{{$ ../name/__value__/__lowercase_text__}}');
{{@elseif {{$ ../property_type/__value__}} == "URLAddress"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}');
{{@endif}}