@extends('layouts.app')
@section('title','Tiwi | Data Contacts')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Contacts Us</h2>
                        <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $index => $contact)
                                <tr>
                                    <td>{{ $index + 1}}</td>
                                    <td>{{ $contact->nama}}</td>
                                    <td>{{ $contact->email}}</td>
                                    <td>{{ $contact->pesan}}</td>
                                    <td>
                                        <a href="{{ route('contacts.edit', $contact->id)}}"><i class="fas fa-edit"></i></a>
                                        |
                                        <a href="{{ route('contacts.destroy', $contact->id)}}"><i class="fas fa-trash" style="color:red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                        {{ $contacts->links() }}
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>tiwias_ © 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection