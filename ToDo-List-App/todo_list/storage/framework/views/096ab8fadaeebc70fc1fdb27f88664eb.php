<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <title>To-do List</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        
        <div class="container1 relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
           
        <div>
            <h1 class="header">To-do List</h1 >
            <table class="table">
                
                <?php $__currentLoopData = $listItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr class="tableRow"><td>Task: <?php echo e($listItem->name); ?></td>
                    <div style="display: flex">

                     
                    <form method="post" action="<?php echo e(route( 'markComplete', $listItem->id)); ?>" accept-charset="UTF-8">
                        <?php echo e(csrf_field()); ?>

                        
                        <td><button class="button combutton" type="submit">Completed</button></td>
            
                     </form>

                     <form method="post" action="<?php echo e(route( 'removeItem', $listItem->id)); ?>" accept-charset="UTF-8">
                       <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field('DELETE')); ?>

                        <td><button class="button delbutton" type="submit">Delete</button></td>
            
                     </form>
                     
                     
                    </div> 
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <form method="post" action="<?php echo e(route( 'saveItem')); ?>" accept-charset="UTF-8">
                <?php echo e(csrf_field()); ?>

                
                <tr class="tableRow"><td class="newItemCentre"><label for="listItem">New Task</label></br></td></tr>
                <tr class="tableRow"><td class="newItemCentre"><input type="text" name="listItem"></br></td></tr>
                <tr class="tableRow"><td class="newItemCentre"><button class="button savebutton">Save Item</button></td></tr>
                
            </form>
        
        </table>
        </div>
            </div>
    </body>
</html>
<?php /**PATH C:\Users\joshu\Documents\ToDo-List-App\todo_list\resources\views/welcome.blade.php ENDPATH**/ ?>