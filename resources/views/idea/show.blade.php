@extends('layouts.layout')


@section('content')
        <div class="row">


            <div class="col-3">

                @include('includes.side-bar')

               </div>
            <div class="col-6">

                 @include('includes.success-message')

                 @include('includes.error-message')

                {{-- @include('includes.submit-idea') --}}
                <hr>
                <div class="mt-3">
                    @include('idea.includes.idea-card')

                </div>

            </div>
            <div class="col-3">

               @include('includes.search')


               @include('includes.follow-box')
            </div>
        </div>

    @endsection
