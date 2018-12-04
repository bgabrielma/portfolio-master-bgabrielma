<div class="separator-frame sf-color-orange separator-frame-half"></div>
<div class="correct-viewport"></div>

<style>
    .no-gutter-card-deck.card-columns {
  column-gap: 0;
}
</style>
<div class="text-card scroll-frame-work-card">
    <div class="text text-center">
        Trabalhos realizados
    </div>
</div>
<div class="container-fluid p-0 m-0" style="margin-top: -10px !important;">
    <div class="scroll-frame-work-cards card-columns no-gutter-card-deck text-center mb-2 mt-2">
        <div class="card">
            <img data-website="trainenergy" class="card-img-top image-work mx-auto img-fluid" src="<?= base_url(); ?>docs/bg.png" alt="Card image cap">
            <div class="overlay">
                <div class="text">
                    <h5>TrainEnergy</h5>
                    <hr>
                    <h6>Prova de Aptidão Profissional - TGPSI 2015/2018</h6>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top image-work mx-auto img-fluid" src="<?= base_url(); ?>docs/bg.png" alt="Card image cap">
            <div class="overlay">
                <div class="text">
                    <h5>Conteúdo a ser definido</h5>
                    <hr>
                    <h6>Conteúdo a ser definido...</h6>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top image-work mx-auto img-fluid" src="<?= base_url(); ?>docs/bg.png" alt="Card image cap">
            <div class="overlay">
                <div class="text">
                    <h5>Conteúdo a ser definido</h5>
                    <hr>
                    <h6>Conteúdo a ser definido...</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on("click", ".card", function() {
        let parent = $(this);
        let url = parent.find('img').data('website');
        
        switch(url) {
            case 'trainenergy' : {
                window.open('http://papserver.aelc.pt/~Bruno32956/ProjetoPAP/TrainEnergy-master/#Home', '_blank').focus();
                break;
            }
        }
    })
</script>