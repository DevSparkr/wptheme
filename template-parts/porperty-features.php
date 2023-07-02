<div class="my-5 flex items-center ga-yp-3 gap-x-5 text-xl">
    <?php
        if( get_field( 'num_bed' ) ){
    ?>
    <div class="flex items-center gap-1">
        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 9.557V3h-2v2H6V3H4v6.557C2.81 10.25 2 11.525 2 13v4a1 1 0 0 0 1 1h1v4h2v-4h12v4h2v-4h1a1 1 0 0 0 1-1v-4c0-1.475-.811-2.75-2-3.443zM18 7v2h-5V7h5zM6 7h5v2H6V7zm14 9H4v-3c0-1.103.897-2 2-2h12c1.103 0 2 .897 2 2v3z"></path></svg>
        <?php the_field( 'num_bed' ); ?>
    </div>
    <?php 
        }
    ?>
    <?php
        if( get_field( 'num_bath' ) ){
    ?>
    <div class="flex items-center gap-1">
        <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24" viewBox="0 0 23.69 24">
            <path d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z" transform="translate(-1196.31 -593)"></path>
        </svg>
        <?php the_field( 'num_bath' ); ?>
    </div>
    <?php 
        }
    ?>
    <?php
        if( get_field( 'area' ) ){
    ?>
    <div class="flex items-center gap-1">
        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M27 22.142V9.858A3.992 3.992 0 1 0 22.142 5H9.858A3.992 3.992 0 1 0 5 9.858v12.284A3.992 3.992 0 1 0 9.858 27h12.284A3.992 3.992 0 1 0 27 22.142ZM26 4a2 2 0 1 1-2 2a2.002 2.002 0 0 1 2-2ZM4 6a2 2 0 1 1 2 2a2.002 2.002 0 0 1-2-2Zm2 22a2 2 0 1 1 2-2a2.002 2.002 0 0 1-2 2Zm16.142-3H9.858A3.994 3.994 0 0 0 7 22.142V9.858A3.995 3.995 0 0 0 9.858 7h12.284A3.994 3.994 0 0 0 25 9.858v12.284A3.993 3.993 0 0 0 22.142 25ZM26 28a2 2 0 1 1 2-2a2.003 2.003 0 0 1-2 2Z"></path></svg>
        <?php the_field( 'area' ); ?>
    </div>
    <?php 
        }
    ?>
</div>