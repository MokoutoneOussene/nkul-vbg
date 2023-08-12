<div class="container-fluid">
    <h2 class="mt-4 text-center">Statistiques</h2>

    <div class="row p-30-0">
        <div class="col-md-4 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">{{ $cameroun->count() }}</span>
                </div>
                <h6>Cameroun</h6>
            </div>
        </div>

        <div class="col-md-4 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">{{ $centraf->count() }}</span>
                </div>
                <h6>Centrafrique</h6>
            </div>
        </div>

        <div class="col-md-4 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">{{ $congo->count() }}</span>
                </div>
                <h6>Congo</h6>
            </div>
        </div>

        <div class="col-md-4 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">{{ $gabon->count() }}</span>
                </div>
                <h6>Gabon</h6>
            </div>
        </div>
        <div class="col-md-4 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">{{ $guinee->count() }}</span>
                </div>
                <h6>Guinée-equatoriale</h6>
            </div>

        </div>
        <div class="col-md-4 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">{{ $tchad->count() }}</span>
                </div>
                <h6>Tchad</h6>
            </div>
        </div>
        <div class="col-md-4 col-6">
            <div class="art-counter-frame">
                <div class="art-counter-box">
                    <span class="art-counter">{{ $saotome->count() }}</span>
                </div>
                <h6>Sao Tomé-et-Principe</h6>
            </div>
        </div>
    </div>
</div>
