{{@if {{$ ../property_type/__value__}} == "Checkbox"}}
			$table->smallInteger('{{$ ../name/__value__/__lowercase_text__}}')->default(0);
{{@elseif {{$ ../property_type/__value__}} == "Date"}}
			$table->date('{{$ ../name/__value__/__lowercase_text__}}')->nullable();
{{@elseif {{$ ../property_type/__value__}} == "DateTime"}}
			$table->dateTime('{{$ ../name/__value__/__lowercase_text__}}')->default('0000-00-00 00:00:00');
{{@elseif {{$ ../selection_properties/property_model_multiple_selection_0/__value__}} == "0"}}
			$table->smallInteger('{{$ ../name/__value__/__lowercase_text__}}')->default(0);
{{@elseif {{$ ../selection_properties/property_model_multiple_selection_1/__value__}} == "1"}}
			$table->foreign('{{$ ../name/__value__/__lowercase_text__}}')
                		->references('id')
                		->on('../selection_properties/property_model')
                		->onDelete('cascade');
{{@elseif {{$ ../property_type/__value__}} == "EmailAddress"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}')->nullable();
{{@elseif {{$ ../property_type/__value__}} == "HTMLEditor"}}
			$table->longText('{{$ ../name/__value__/__lowercase_text__}}')->nullable();
{{@elseif {{$ ../property_type/__value__}} == "Integer"}}
			$table->bigInteger('{{$ ../name/__value__/__lowercase_text__}}')->default(0);
{{@elseif {{$ ../property_type/__value__}} == "Location"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}')->nullable();
{{@elseif {{$ ../property_type/__value__}} == "LongText"}}
			$table->longText('{{$ ../name/__value__/__lowercase_text__}}')->nullable();
{{@elseif {{$ ../property_type/__value__}} == "Number"}}
			$table->double('{{$ ../name/__value__/__lowercase_text__}}', 8, 2)->default(0.0);
{{@elseif {{$ ../property_type/__value__}} == "Password"}}
			$table->longText('{{$ ../name/__value__/__lowercase_text__}}')->nullable();
{{@elseif {{$ ../property_type/__value__}} == "PhoneNumber"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}')->nullable();
{{@elseif {{$ ../property_type/__value__}} == "Radio"}}
			$table->bigInteger('{{$ ../name/__value__/__lowercase_text__}}')->default(0);
{{@elseif {{$ ../property_type/__value__}} == "ShortText"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}')->nullable();
{{@elseif {{$ ../property_type/__value__}} == "Switch"}}
			$table->smallInteger('{{$ ../name/__value__/__lowercase_text__}}')->default(0);
{{@elseif {{$ ../property_type/__value__}} == "Time"}}
			$table->time('{{$ ../name/__value__/__lowercase_text__}}')->default('00:00:00');
{{@elseif {{$ ../property_type/__value__}} == "URLAddress"}}
			$table->string('{{$ ../name/__value__/__lowercase_text__}}')->nullable();
{{@endif}}
