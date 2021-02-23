DB::table('users')->insert(['name'=>'GenRubio','email'=>'keylorubio@gmail.com','password'=>Hash::make('13021998')])


Tipos de usuarios:
A = Administrados
E = Empleado consultor
M = Moderador de pagina
EC = Empleado comun sin acceso a la aplicacion web

Para manejar las imagenes del BackPack nesesitamos 
composer require intervention/image
composer require laravel/helpers