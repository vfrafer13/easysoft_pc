@extends('layouts.app')
@section('title')
    <title>easySOFT PC | Contacto </title>
@stop
@section('content')
    <!-- ABOUT -->
    <section id="about">
        <!-- MULTI PURPOSE -->
        <div class="purpose_block">
            <div class="container">
                <div class="col-lg-4 col-md-4 padbot60">
                    <h2><b>Contáctanos </b> para tus prácticas profesionales!</h2>

                    <!-- CONTACT FORM -->
                    <div class="span9 contact_form">
                        <div id="note"></div>
                        <div id="fields">
                            <form id="contact-form-face" class="clearfix" action="#">
                                <input type="text" name="name" value="Nombre" onFocus="if (this.value == 'Nombre') this.value = '';" onBlur="if (this.value == '') this.value = 'Nombre';" />
                                <input type="text" name="email" value="Email" onFocus="if (this.value == 'Email') this.value = '';" onBlur="if (this.value == '') this.value = 'Email';" />
                                <input type="text" name="message" value="CV de LinkedIn" onFocus="if (this.value == 'CV de LinkedIn') this.value = '';" onBlur="if (this.value == '') this.value = 'CV de LinkedIn';"/>
                                <input class="contact_btn" type="submit" value="Enviar mensaje" />
                            </form>
                        </div>
                    </div><!-- //CONTACT FORM -->
                </div>
            </div>
        </div>
    </section>
@stop