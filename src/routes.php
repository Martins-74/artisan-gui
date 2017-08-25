<?php
session_start();

Route::get('artisan-gui/killsession', function(){

	unset($_SESSION);
    session_destroy();
    sleep(5);

});

Route::get('artisan-gui', function(){

    if(config('artisan-gui-configs.useLaravelDebug') == "yes"){
        $condition = env('APP_DEBUG', '') == true;
    }else{
        $condition = config('artisan-gui-configs.artisanGUISwitch')  == "on";
    }

	if($condition){
		if (!empty($_SESSION["Correct"])) {
			if($_SESSION["Correct"] == 'true'){
				return view ('gui::gui', ['PasswordHasBeenVerified'=>'true']);
			}else{
		    	return view ('gui::gui', ['PasswordHasBeenVerified'=>'false']);
			}
		}else{
	    	return view ('gui::gui', ['PasswordHasBeenVerified'=>'false']);
		}
	}else{
		return redirect('404');
	} 
	

});

Route::post('artisan-gui/login', function(){

    if(config('artisan-gui-configs.useLaravelDebug') == "yes"){
        $condition = env('APP_DEBUG', '') == true;
    }else{
        $condition = config('artisan-gui-configs.artisanGUISwitch') == "on";
    }

	if($condition){
		if($_POST['ip1'] == $_POST['ip2']){
			if($_POST['ip1'] == config('artisan-gui-configs.password')){
				$_SESSION["Correct"] = "true";
			}else{
				$_SESSION["Correct"] = "false";
			}
		}else{
			$_SESSION["Correct"] = "false";
		}

	    return redirect('artisan-gui');
	}else{
		return redirect('404');
	}   
});

Route::get('artisan-gui/command/{command}',  array('name' => 'controller', function($command = null){ 

    if(config('artisan-gui-configs.useLaravelDebug') == "yes"){
        $condition = env('APP_DEBUG', '') == true;
    }else{
        $condition = config('artisan-gui-configs.artisanGUISwitch');
    }

    if($_SESSION["Correct"] == 'true' && $condition){
        
        $comands = explode(":", $command);

        if($comands[0] == "make"){
            if($comands[1] == "controller"){

                Artisan::call('make:controller', [
                    'name' => $comands[2]
                ]);
                return 'true';
            }else if($comands[1] == "migration"){

                Artisan::call('make:migration', [
                    'name' => $comands[2]
                ]);
                return 'true';
            }else if($comands[1] == "model"){

                Artisan::call('make:model', [
                    'name' => $comands[2]
                ]);
                return 'true';
            }else if($comands[1] == "mail"){

                Artisan::call('make:mail', [
                    'name' => $comands[2]
                ]);
                return 'true';
            }else if($comands[1] == "command"){

                Artisan::call('make:command', [
                    'name' => $comands[2]
                ]);
                return 'true';
            }else if($comands[1] == "seed"){

                Artisan::call('make:seed', [
                    'name' => $comands[2]
                ]);
                return 'true';
            }
        }else if($comands[0] == "migrate"){

            if(empty($comands[1])){

                Artisan::call('migrate', [
                    '--force' => true,
                ]);
                return 'true';
            }else if($comands[1] = "install"){

                Artisan::call('migrate:install', [
                    '--force' => true,
                ]);
                return 'true';
            }else{
               
                Artisan::call('migrate:refresh', [
                    '--force' => true,
                ]);
               	return 'true';
            }
        }else if($comands[0] == "queue"){

            if($comands[1] == "table"){

                Artisan::call('queue:table', [
                ]);
                return 'true';
            }else if($comands[1] == "restart"){

                Artisan::call('queue:restart', [
                ]);
                return 'true';
            }else if($comands[1] == "work"){

                Artisan::call('queue:work', [
                ]);
                return 'true';
            }           
        }else if($comands[0] == "down"){

            if(empty($comands[1])){

                Artisan::call('down', [
                ]);
                return 'true';
            }       
        }else if($comands[0] == "up"){

            if(empty($comands[1])){

                Artisan::call('up', [
                ]);
                return 'true';
            }       
        }else if($comands[0] == "schedule"){

            if($comands[1] == "run"){

                Artisan::call('schedule:run', [
                ]);
                return 'true';
            }       
        }else if($comands[0] == "storage"){

            if($comands[1] == "link"){

                Artisan::call('storage:link', [
                ]);
                return 'true';
            }
        }else if($comands[0] == "vendor"){

            if($comands[1] == "publish"){

                Artisan::call('vendor:publish', [
                ]);
                return 'true';
            }
        }else if($comands[0] == "db"){

            if($comands[1] == "seed"){

                Artisan::call('db:seed', [
                ]);
                return 'true';
            }
        }else if($comands[0] == "cache"){

            if($comands[1] == "clear"){
                Artisan::call('cache:clear', [
                ]);
            }
        }           
    }else{
		return redirect('artisan-gui.');
	} 
}));
