@foreach ($productos as $producto)
@for($i = 1; $i < $productos->count()/2; $i++)
<article id='tabs-{{$i}}'>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="left-list">
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <h4>{{$producto->nombre}}</h4>
                            <p>Descripción</p>
                                <div class="price">
                                    <h6>${{$producto->precio}}</h6>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor

        <div class="col-lg-6">
            <div class="row">
                <div class="right-list">
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-04.png"
                                alt="">
                            <h4>Eggs Omelette</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur koit
                                adipiscing
                                elit, sed do.</p>
                            <div class="price">
                                <h6>$6.50</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-05.png"
                            alt="">
                            <h4>Dollma Pire</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur koit
                                adipiscing
                                elit, sed do.</p>
                            <div class="price">
                                <h6>$5.00</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-item">
                            <img src="assets/images/tab-item-06.png"
                                alt="">
                                <h4>Omelette & Cheese</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur koit
                                adipiscing
                                elit, sed do.</p>
                                <div class="price">
                                    <h6>$4.10</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
@endforeach
