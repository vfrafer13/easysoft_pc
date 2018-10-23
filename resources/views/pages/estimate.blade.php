@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Cotización </title>
@stop
@section('content')
    <!-- ABOUT -->
    <section id="about">
        <!-- MULTI PURPOSE -->
        <div class="purpose_block">
            <div class="container">
                <!-- ROW -->
                <div class="row">

                    <div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
                        <h2><b>Cotiza tu capacitación con nosotros</b></h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 padbot60">
                    <!-- CONTACT FORM -->
                    <div class="span9 contact_form">
                        <div id="note"></div>
                        <div id="fields">
                            <form id="contact-form-face" class="clearfix" action="#">
                                <input type="text" name="name" value="Nombre" onFocus="if (this.value == 'Nombre') this.value = '';" onBlur="if (this.value == '') this.value = 'Nombre';" />
                                <input type="text" name="email" value="Email" onFocus="if (this.value == 'Email') this.value = '';" onBlur="if (this.value == '') this.value = 'Email';" />
                                <textarea name="message" value="" onFocus="if (this.value == 'Mensaje') this.value = '';" onBlur="if (this.value == '') this.value = 'Mensaje';"></textarea>
                                <input class="contact_btn" type="submit" value="Solicitar cotización" />
                            </form>
                        </div>
                    </div><!-- //CONTACT FORM -->
                </div>
            </div>
        </div>
    </section>
@stop