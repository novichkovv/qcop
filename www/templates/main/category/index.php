<div class="ct-u-sectionBorder ct-u-paddingTop60">
<div class="container ct-u-paddingBottom200">
<div class="row">
<div class="col-md-4">
    <form class="ct-form-group input-daterange input-group ct-u-marginBottom30" id="datepicker">
        <input type="text" class="form-control" placeholder="Check In Date" name="start"  title="from"/>  <!-- LABEL TODO -->
        <input type="text" class="form-control" placeholder="Check Out Date" name="end"  title="to"/>
    </form>
    <div class="clearfix"></div>

    <div class="form-group ct-widget-search ct-u-marginBottom30">
        <input placeholder="Search..." type="text" name="field[]" class="form-control">
        <button type="submit"><i class="fa fa-search fa-fw"></i></button>
    </div>

    <div class="ct-widget-filter-byType ct-u-marginBottom30">
        <h3 class="ct-widget-header">Car type</h3>
        <form class="ct-widget-content">
            <div class="ct-u-displayTableVertical">
                <div class="ct-u-displayTableCell">
                    <div class="ct-checkbox">
                        <input id="checkbox0" class="ct-js-carType" name="carType" type="radio" value="*" checked>
                        <label for="checkbox0" class="checkbox-inline">All cars</label>
                    </div>
                </div>
                <div class="ct-u-displayTableCell">
                    <span>(49)</span>
                </div>
            </div>
            <div class="ct-u-displayTableVertical">
                <div class="ct-u-displayTableCell">
                    <div class="ct-checkbox">
                        <input id="checkbox1" class="ct-js-carType" name="carType" type="radio" value=".sedan">
                        <label for="checkbox1" class="checkbox-inline">Sedans</label>
                    </div>
                </div>
                <div class="ct-u-displayTableCell">
                    <span>(14)</span>
                </div>
            </div>
            <div class="ct-u-displayTableVertical">
                <div class="ct-u-displayTableCell">
                    <div class="ct-checkbox">
                        <input id="checkbox2" class="ct-js-carType" name="carType" type="radio" value=".sport">
                        <label for="checkbox2" class="checkbox-inline">Sports cars</label>
                    </div>
                </div>
                <div class="ct-u-displayTableCell">
                    <span>(23)</span>
                </div>
            </div>
            <div class="ct-u-displayTableVertical">
                <div class="ct-u-displayTableCell">
                    <div class="ct-checkbox">
                        <input id="checkbox3" class="ct-js-carType" name="carType" type="radio" value=".luxury">
                        <label for="checkbox3" class="checkbox-inline">Luxury limousines</label>
                    </div>
                </div>
                <div class="ct-u-displayTableCell">
                    <span>(07)</span>
                </div>
            </div>
            <div class="ct-u-displayTableVertical">
                <div class="ct-u-displayTableCell">
                    <div class="ct-checkbox">
                        <input id="checkbox4" class="ct-js-carType" name="carType" type="radio" value=".toy">
                        <label for="checkbox4" class="checkbox-inline">Toy cars</label>
                    </div>
                </div>
                <div class="ct-u-displayTableCell">
                    <span>(03)</span>
                </div>
            </div>
        </form>
    </div>

    <div class="ct-widget ct-widget-filter-byPrice ct-u-marginBottom30">
        <h3 class="ct-widget-header">Price per day</h3>
        <form class="ct-widget-content">
            <div id="data-price" class="ct-u-paddingBottom10 ct-sliderAmount">
                <input type="text" value="$100" required class="form-control slider_min" placeholder="">
                <input type="text" value="$990" required class="form-control slider_max" placeholder="">
                <input type="text" data-currency="$" class="slider sliderAmount" value="" data-slider-tooltip="hide" data-slider-handle="round" data-slider-min="100" data-slider-max="990" data-slider-step="10" data-slider-value="[100,990]" title="Slider Amount">
            </div>
        </form>
    </div>

    <div class="ct-widget ct-widget-captcha ct-u-marginBottom30">
        <h3 class="ct-widget-header">Are you humanoid ?</h3>
        <form class="ct-widget-content">
            <div class="ct-u-displayTableVertical">
                <div class="ct-u-displayTableCell">
                    <div class="ct-checkbox ct-checkbox--rounded">
                        <input id="checkbox5" name="radio2" type="radio" checked>
                        <label for="checkbox5" class="checkbox-inline">Yes I am</label>
                    </div>
                </div>
                <div class="ct-u-displayTableCell">
                    <div class="ct-checkbox ct-checkbox--rounded">
                        <input id="checkbox6" name="radio2" type="radio">
                        <label for="checkbox6" class="checkbox-inline">I'm not sure</label>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="ct-widget ct-widget-filter-byPrice ct-u-marginBottom30">
        <h3 class="ct-widget-header">Number of passengers</h3>
        <div id="data-passengers" class="ct-widget-content ct-u-paddingBottom10 ct-sliderAmount">
            <input type="text" value="0" required class="form-control slider_min" placeholder="">
            <input type="text" value="9" required class="form-control slider_max" placeholder="">
            <input type="text" class="slider sliderAmount" data-slider-tooltip="hide" data-slider-handle="round" data-slider-min="0" data-slider-max="9" data-slider-step="1" data-slider-value="[0,9]" title="Slider Amount">
        </div>
    </div>

    <div class="ct-widget ct-u-marginBottom30">
        <h3 class="ct-widget-header">Driver</h3>
        <form class="ct-widget-content">
            <select class="ct-select ct-js-selectize ct-js-selectDriver" title="Driver">
                <option value="*">with or without driver</option>
                <option value=".withDriver">with driver</option>
                <option value=".withoutDriver">without driver</option>
            </select>
        </form>
    </div>

    <a href="rent-page-variation-2.html" class="btn btn-wide btn-motive ct-u-marginBottom50"><span>Clear Filters</span></a>
</div>

<div class="col-md-8">
    <form class="row">
        <div class="col-md-7">
            <div class="ct-checkbox ct-u-paddingTop10 ct-u-paddingMD-bot10">
                <input id="checkbox7" type="checkbox" checked>
                <label for="checkbox7" class="h6 checkbox-inline"><small class="ct-u-colorDarkGray2 ct-fw-600 ct-fs-i">show me only available cars for the dates I choose</small></label>
            </div>
        </div>
        <div class="col-md-5">
            <select class="ct-select ct-js-selectize" title="Sorting">
                <option value="1">sort by price ascending</option>
                <option value="2">sort by price descending</option>
                <option value="3">sort by date ascending</option>
                <option value="4">sort by date descending</option>
            </select>
        </div>
    </form>

    <div class="ct-product-gallery" >
        <!-- ======================= -->
        <div class="ct-product ct-product--type2 media hidden sedan withoutDriver" data-price="400" data-passengers="2">
            <div class="ct-product-image media-left">
                <img src="../../../images/products/97cd6d.jpg" alt="">
            </div>
            <div class="ct-product-content media-body">
                <h4 class="ct-product-header ct-u-hr ct-u-hr--left">CZ 4X</h4>
                <p>Мультироторная система типа квадракоптер (4 винта, 4 мотора). Предназначен для создания динамичного видео. Благодаря асиметричному расположению лучей, двигатели коптера не попадают в кадр, а модель является самой компактной в классе.</p>
                <ul class="ct-list ct-u-paddingTop10">
                    <li>Грузоподъёмность <span class="pull-right"> до 1 кг</span></li>
                    <li>Время полета <span class="pull-right">Manual</span></li>
                    <li>Скорость <span class="pull-right">15 м/c</span></li>
                    <li>Air conditioning <span class="pull-right">Yes</span></li>
                    <li>Wheel and pedals <span class="pull-right">Yes</span></li>
                </ul>
                <p class="ct-product-price">от <span class="h2"><small><span class="ct-product-currency"></span> 120000</small></span>рублей</p>
                <a href="rent-item.html" class="btn btn-motive"><span>Заказать</span></a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ======================= -->
        <div class="ct-product ct-product--type2 media hidden sport withDriver" data-price="560" data-passengers="8">>
            <div class="ct-product-image media-left"><img src="../../../images/qcop324_72.png" alt=""></div>
            <div class="ct-product-content media-body">
                <h4 class="ct-product-header ct-u-hr ct-u-hr--left">Tomota Landcruiser</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipis suspendisse mauris condimentum mau porttitor met mauris,
                    facerit phasellique certimus caesen. Lorem ipsum dolor sit amet facerit manis.</p>
                <ul class="ct-list ct-u-paddingTop10">
                    <li>Top speed <span class="pull-right">230 km/h</span></li>
                    <li>Transmission <span class="pull-right">Manual</span></li>
                    <li>Consumpion <span class="pull-right">9L/100km</span></li>
                    <li>Passengers <span class="pull-right">6</span></li>
                    <li>Air conditioning <span class="pull-right">Yes</span></li>
                    <li>Wheel and pedals <span class="pull-right">Yes</span></li>
                </ul>
                <p class="ct-product-price"><span class="h2"><small><span class="ct-product-currency">$</span>560 </small></span>per day</p>
                <a href="rent-item.html" class="btn btn-motive"><span>Booking Details</span></a>
            </div>
        </div>
        <!-- ======================= -->
        <div class="ct-product ct-product--type2 media hidden toy withoutDriver" data-price="350" data-passengers="1">
            <div class="ct-product-image media-left"><img src="../../../images/qcop324_72.png" alt=""></div>
            <div class="ct-product-content media-body">
                <h4 class="ct-product-header ct-u-hr ct-u-hr--left">Aumi A6</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipis suspendisse mauris condimentum mau porttitor met mauris,
                    facerit phasellique certimus caesen. Lorem ipsum dolor sit amet facerit manis.</p>
                <ul class="ct-list ct-u-paddingTop10">
                    <li>Top speed <span class="pull-right">230 km/h</span></li>
                    <li>Transmission <span class="pull-right">Manual</span></li>
                    <li>Consumpion <span class="pull-right">9L/100km</span></li>
                    <li>Passengers <span class="pull-right">3</span></li>
                    <li>Air conditioning <span class="pull-right">Yes</span></li>
                    <li>Wheel and pedals <span class="pull-right">Yes</span></li>
                </ul>
                <p class="ct-product-price"><span class="h2"><small><span class="ct-product-currency">$</span>350 </small></span>per day</p>
                <a href="rent-item.html" class="btn btn-motive"><span>Booking Details</span></a>
            </div>
        </div>
        <!-- ======================= -->
        <div class="ct-product ct-product--type2 media hidden luxury withDriver" data-price="740" data-passengers="7">
            <div class="ct-product-image media-left"><img src="../../../images/qcop324_72.png" alt=""></div>
            <div class="ct-product-content media-body">
                <h4 class="ct-product-header ct-u-hr ct-u-hr--left">Mermedess Kompressor</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipis suspendisse mauris condimentum mau porttitor met mauris,
                    facerit phasellique certimus caesen. Lorem ipsum dolor sit amet facerit manis.</p>
                <ul class="ct-list ct-u-paddingTop10">
                    <li>Top speed <span class="pull-right">230 km/h</span></li>
                    <li>Transmission <span class="pull-right">Manual</span></li>
                    <li>Consumpion <span class="pull-right">9L/100km</span></li>
                    <li>Passengers <span class="pull-right">5</span></li>
                    <li>Air conditioning <span class="pull-right">Yes</span></li>
                    <li>Wheel and pedals <span class="pull-right">Yes</span></li>
                </ul>
                <p class="ct-product-price"><span class="h2"><small><span class="ct-product-currency">$</span>740 </small></span>per day</p>
                <a href="rent-item.html" class="btn btn-motive"><span>Booking Details</span></a>
            </div>
        </div>
        <!-- ======================= -->
        <div class="ct-product ct-product--type2 media hidden toy withoutDriver" data-price="75" data-passengers="5">
            <div class="ct-product-image media-left"><img src="../../../images/qcop324_72.png" alt=""></div>
            <div class="ct-product-content media-body">
                <h4 class="ct-product-header ct-u-hr ct-u-hr--left">BMG Z Series</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipis suspendisse mauris condimentum mau porttitor met mauris,
                    facerit phasellique certimus caesen. Lorem ipsum dolor sit amet facerit manis.</p>
                <ul class="ct-list ct-u-paddingTop10">
                    <li>Top speed <span class="pull-right">230 km/h</span></li>
                    <li>Transmission <span class="pull-right">Manual</span></li>
                    <li>Consumpion <span class="pull-right">9L/100km</span></li>
                    <li>Passengers <span class="pull-right">2</span></li>
                    <li>Air conditioning <span class="pull-right">Yes</span></li>
                    <li>Wheel and pedals <span class="pull-right">Yes</span></li>
                </ul>
                <p class="ct-product-price"><span class="h2"><small><span class="ct-product-currency">$</span>75 </small></span>per day</p>
                <a href="rent-item.html" class="btn btn-motive"><span>Booking Details</span></a>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ======================= -->
        <div class="ct-product ct-product--type2 media hidden sport withDriver" data-price="180" data-passengers="4">
            <div class="ct-product-image media-left"><img src="../../../images/qcop324_72.png" alt=""></div>
            <div class="ct-product-content media-body">
                <h4 class="ct-product-header ct-u-hr ct-u-hr--left">Bord Mustanp</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipis suspendisse mauris condimentum mau porttitor met mauris,
                    facerit phasellique certimus caesen. Lorem ipsum dolor sit amet facerit manis.</p>
                <ul class="ct-list ct-u-paddingTop10">
                    <li>Top speed <span class="pull-right">230 km/h</span></li>
                    <li>Transmission <span class="pull-right">Manual</span></li>
                    <li>Consumpion <span class="pull-right">9L/100km</span></li>
                    <li>Passengers <span class="pull-right">6</span></li>
                    <li>Air conditioning <span class="pull-right">Yes</span></li>
                    <li>Wheel and pedals <span class="pull-right">Yes</span></li>
                </ul>
                <p class="ct-product-price"><span class="h2"><small><span class="ct-product-currency">$</span>180 </small></span>per day</p>
                <a href="rent-item.html" class="btn btn-motive"><span>Booking Details</span></a>
            </div>
        </div>
        <!-- ======================= -->
        <div class="ct-product ct-product--type2 media hidden toy withDriver" data-price="990" data-passengers="0">
            <div class="ct-product-image media-left"><img src="../../../images/qcop324_72.png" alt=""></div>
            <div class="ct-product-content media-body">
                <h4 class="ct-product-header ct-u-hr ct-u-hr--left">Burakki Veylon</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipis suspendisse mauris condimentum mau porttitor met mauris,
                    facerit phasellique certimus caesen. Lorem ipsum dolor sit amet facerit manis.</p>
                <ul class="ct-list ct-u-paddingTop10">
                    <li>Top speed <span class="pull-right">230 km/h</span></li>
                    <li>Transmission <span class="pull-right">Manual</span></li>
                    <li>Consumpion <span class="pull-right">9L/100km</span></li>
                    <li>Passengers <span class="pull-right">3</span></li>
                    <li>Air conditioning <span class="pull-right">Yes</span></li>
                    <li>Wheel and pedals <span class="pull-right">Yes</span></li>
                </ul>
                <p class="ct-product-price"><span class="h2"><small><span class="ct-product-currency">$</span>990 </small></span>per day</p>
                <a href="rent-item.html" class="btn btn-motive"><span>Booking Details</span></a>
            </div>
        </div>
        <!-- ======================= -->
        <div class="ct-product ct-product--type2 media hidden luxury withDriver" data-price="100" data-passengers="9">
            <div class="ct-product-image media-left"><img src="../../../images/qcop324_72.png" alt=""></div>
            <div class="ct-product-content media-body">
                <h4 class="ct-product-header ct-u-hr ct-u-hr--left">BMG CPG 7</h4>
                <p>Lorem ipsum dolor sit amet, consecte adipis suspendisse mauris condimentum mau porttitor met mauris,
                    facerit phasellique certimus caesen. Lorem ipsum dolor sit amet facerit manis.</p>
                <ul class="ct-list ct-u-paddingTop10">
                    <li>Top speed <span class="pull-right">230 km/h</span></li>
                    <li>Transmission <span class="pull-right">Manual</span></li>
                    <li>Consumpion <span class="pull-right">9L/100km</span></li>
                    <li>Passengers <span class="pull-right">5</span></li>
                    <li>Air conditioning <span class="pull-right">Yes</span></li>
                    <li>Wheel and pedals <span class="pull-right">Yes</span></li>
                </ul>
                <p class="ct-product-price"><span class="h2"><small><span class="ct-product-currency">$</span>100 </small></span>per day</p>
                <a href="rent-item.html" class="btn btn-motive"><span>Booking Details</span></a>
            </div>
        </div>
        <!-- ======================= -->
    </div>

</div>
</div>
</div>
