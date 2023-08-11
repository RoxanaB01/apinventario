<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   

      //roles 
      Permission::create([
        'name'=>'Navegar roles  ',
        'slug'=>'roles.index',
        'description'=>'lista y navegar por la roles  del sistema',
       ]);
       Permission::create([
           'name'=>'edicion  roles  ',
           'slug'=>'roles.edit',
           'description'=>'editar roles  ',
          ]);

          Permission::create([
           'name'=>'crear roles  ',
           'slug'=>'roles.create',
           'description'=>'crear cualquir roles  ',
          ]);

          Permission::create([
           'name'=>'eliminar  roles  ',
           'slug'=>'roles.destroy',
           'description'=>'eliminar cualquier roles ',
          ]);
      // user 
      Permission::create([
        'name'=>'Navegar usuario ',
        'slug'=>'users.index',
        'description'=>'lista y navegar por la usuario del sistema',
       ]);
       Permission::create([
           'name'=>'edicion  usuario ',
           'slug'=>'users.edit',
           'description'=>'editar usuario ',
          ]);

          Permission::create([
           'name'=>'crear usuario ',
           'slug'=>'users.create',
           'description'=>'crear cualquir usuario ',
          ]);

          Permission::create([
           'name'=>'eliminar  usuario ',
           'slug'=>'users.destroy',
           'description'=>'eliminar cualquier usuario',
          ]);
          // categori
        Permission::create([
         'name'=>'Navegar categorias ',
         'slug'=>'categories.index',
         'description'=>'lista y navegar por la categogria del sistema',
        ]);
        Permission::create([
            'name'=>'edicion  categorias ',
            'slug'=>'categories.edit',
            'description'=>'editar categirias ',
           ]);

           Permission::create([
            'name'=>'crear categorias ',
            'slug'=>'categories.create',
            'description'=>'crear cualquir categirias ',
           ]);

           Permission::create([
            'name'=>'eliminar  categorias ',
            'slug'=>'categories.destroy',
            'description'=>'eliminar cualquier categoria',
           ]);

           Permission::create([
            'name'=>'Navegar Clientes ',
            'slug'=>'clients.index',
            'description'=>'lista y navegar por los clients del sistema',
           ]);
           Permission::create([
               'name'=>'edicion  clientes ',
               'slug'=>'clients.edit',
               'description'=>'editar clientes ',
              ]);
   
              Permission::create([
               'name'=>'crear clientes ',
               'slug'=>'clients.create',
               'description'=>'crear cualquir clientes',
              ]);
   
              Permission::create([
               'name'=>'eliminar  clientes ',
               'slug'=>'clients.destroy',
               'description'=>'eliminar cualquier clients',
              ]);

              // productos
              Permission::create([
                'name'=>'Navegar productos ',
                'slug'=>'products.index',
                'description'=>'lista y navegar por los productos del sistema',
               ]);
               Permission::create([
                   'name'=>'edicion  productos ',
                   'slug'=>'products.edit',
                   'description'=>'editar productos ',
                  ]);
       
                  Permission::create([
                   'name'=>'crear productos ',
                   'slug'=>'products.create',
                   'description'=>'crear cualquir productos',
                  ]);
       
                  Permission::create([
                   'name'=>'eliminar  productos ',
                   'slug'=>'products.destroy',
                   'description'=>'eliminar cualquier productos',
                  ]);

                  //provedores 

                  Permission::create([
                    'name'=>'Navegar provedores ',
                    'slug'=>'providers.index',
                    'description'=>'lista y navegar por losprovedoress del sistema',
                   ]);
                   Permission::create([
                       'name'=>'edicion  provedores ',
                       'slug'=>'providers.edit',
                       'description'=>'editar provedores ',
                      ]);
           
                      Permission::create([
                       'name'=>'crear provedores ',
                       'slug'=>'providers.create',
                       'description'=>'crear cualquir provedores',
                      ]);
           
                      Permission::create([
                       'name'=>'eliminar  provedores ',
                       'slug'=>'providers.destroy',
                       'description'=>'eliminar cualquier provedores',
                      ]);

                      // compras 
                     
                      Permission::create([
                        'name'=>'Navegar compras ',
                        'slug'=>'purchases.index',
                        'description'=>'lista y navegar por los compras del sistema',
                       ]);
                    
               
                          Permission::create([
                           'name'=>'crear compras ',
                           'slug'=>'purchases.create',
                           'description'=>'crear cualquir compras',
                          ]);

                          Permission::create([
                            'name'=>'descargar pdf ',
                            'slug'=>'purchases.pdf',
                            'description'=>'se prodra descargar las compras ',
                           ]);
                          // ventas
                     
                      Permission::create([
                        'name'=>'Navegar ventas ',
                        'slug'=>'sales.index',
                        'description'=>'lista y navegar por los ventas del sistema',
                       ]);
                    
               
                          Permission::create([
                           'name'=>'crear ventas ',
                           'slug'=>'sales.create',
                           'description'=>'crear cualquir ventass',
                          ]);

                          Permission::create([
                            'name'=>'descargar pdf ',
                            'slug'=>'sales.pdf',
                            'description'=>'se prodra descargar las ventas ',
                           ]);


                           // empresa 
                           Permission::create([
                            'name'=>'Navegar empresa ',
                            'slug'=>'business.index',
                            'description'=>'lista y navegar por los empresa del sistema',
                           ]);

                           Permission::create([
                            'name'=>'edicion  empresa ',
                            'slug'=>'business.edit',
                            'description'=>'editar empresa ',
                           ]);
                        
                           // subir archivo de compras
                           Permission::create([
                            'name'=>'subir archivo ',
                            'slug'=>'upload.purchases',
                            'description'=>'subir archivo de compra',
                           ]);
                           // estado producto
                           Permission::create([
                            'name'=>'estado producto ',
                            'slug'=>'change.status.products',
                            'description'=>'cambiar estado de producto',
                           ]);

                           // estodo compras 
                           Permission::create([
                            'name'=>'estado compras ',
                            'slug'=>'change.status.purchases',
                            'description'=>'cambiar estado de compras',
                           ]);

                           // estado ventas 
                           Permission::create([
                            'name'=>'estado ventas ',
                            'slug'=>'change.status.sales',
                            'description'=>'cambiar estado de ventas',
                           ]);
                              
                           // reporte dia 
                           Permission::create([
                            'name'=>'reporte dias  ',
                            'slug'=>'reports.day',
                            'description'=>'reporte por dia',
                           ]);
                           // reporte mes
                           Permission::create([
                            'name'=>'reporte mes  ',
                            'slug'=>'reports.date',
                            'description'=>'reporte por mes ',
                           ]);


                           // reporte resultados
                           Permission::create([
                            'name'=>'reporte resultados  ',
                            'slug'=>'report.results',
                            'description'=>'reporte resultados ',
                           ]);

    

    }
}
