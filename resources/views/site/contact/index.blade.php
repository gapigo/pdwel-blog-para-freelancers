@extends('layouts.site')

@section('title')
Formulário de contato
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="gray-background">
        <section class="contact__block contact-wrapper">
            <h1 class="display-medium">Precisa falar com a gente? </h1>
            <p>Atendemos você a qualquer hora do dia, de qualquer lugar do mundo! É só chamar em alguma dessas opções de contato.</p>
            <section class="contact__options">

                <form class="contact__form" action="{{route('site.contact.form')}}" method="post">
                @csrf
                @if(session('success'))
                <div class='alert alert-success'>{{session('message')}}</div>
                @endif
                    <div class="d-flex flex-column">
                    <label for="name">Nome Completo</label>
                        <input id="name" name="name" type="text" tabindex="2" placeholder="Ex: Fulano da Silva"
                        value="{{old('name')}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="d-flex flex-column">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" tabindex="2" placeholder="Ex: exemplo@email.com.br"
                        value="{{old('email')}}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex flex-column">
                        <label for="message">Mensagem</label>
                        <textarea id="message" name="message"  tabindex="3"  cols="20" rows="4" placeholder="Digite aqui..."
                        style="margin-bottom: 5%;">{{old('message')}}</textarea>
                        @error('message')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button class="button button_primary" type="submit">Enviar mensagem</button>
                </form>

                <div class="contact__infos">
                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/phone-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Telefone</h3>
                        </div>
                        <a title="clique no número do telefone para ligar" href="tel:169999999">(16) 99999-9999</a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/mail-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Email</h3>
                        </div>
                        <a title="Clique no email para enviar email automatico" href="mailto:hortus ">websitediary@email.com </a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/pin-map-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Endereço </h3>
                        </div>
                        <a title="clique no endereço para traçar uma rota" target="_blank" href="https://www.google.com/maps/dir//Av.+Braz+Olaia+Acosta,+727+-+Jardim+California,+Ribeir%C3%A3o+Preto+-+SP,+14026-040/@-21.2117135,-47.8201906,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x94b9beccaaa6dccd:0xc472dcfb494d66a5!2m2!1d-47.8180019!2d-21.2117135">
                            Av. Brasil, 333<br>
                            Ribeirão Preto<br>
                            Bairro Brasil - Ribeirão Preto/SP<br>
                            CEP: 14444-020
                        </a>
                    </div>
                    <section class="contact__infos__social-media">
                        <a href="#" target="_blank">Facebook /</a>
                        <a href="#"> YouTube</a>
                    </section>
                </div>
            </section>
        </section>
    </div>
@endsection
