<div class="container-fluid">
    

        <?php 
         $currentPast="past";
    
        foreach( $attributes['timeline-repeater'] as $inner ): 
            if ($inner['current'] == 1) $currentPast="current";
    
        ?>
            <div class="row row-eq-height <?php echo $currentPast; ?>">
                <div class="col-3 d-none col-sm-2 d-sm-block none col-lg-1 date"><?php echo date_i18n( 'j.m.Y', strtotime( $inner['timeline-date'] ) ); ?></div>
                <div class="col-2 col-sm-1 dots">
                    <div class="circle"></div>
                    <div class="line"></div>
                </div>
                
                <div class="col-10 col-sm-9 col-lg-10 ">
                    <div class="container-fluid">
                        <div class="row">
                            
                             <div class="col-12 d-block d-sm-none date"><?php echo date_i18n( 'j.m.Y', strtotime( $inner['timeline-date'] ) ); ?></div>
                            <div class="col-12 col-lg-4 header">
                                <?php echo $inner['header']; ?>
                            </div>
                            <div class="col-12 col-lg-8 text">
                                <?php echo $inner['timeline-text']; ?>
                              
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
        <?php 
    
    
        if ($inner['current'] == 1) $currentPast="future";

        endforeach; ?>


    
</div>
