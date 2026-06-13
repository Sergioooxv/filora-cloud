@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<section class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center mb-3">
        <div class="card-dragdrop w-100">
            <div class="icon-dragdrop">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                    <polyline points="17 8 12 3 7 8" />
                    <line x1="12" y1="3" x2="12" y2="15" />
                </svg>
            </div>
            <div class="text-dragdrop">
                <h3>Arrastra archivos aquí para subir</h3>
                <p><a class="link">o haz clic para seleccionar desde tu dispositivo</a> · máx 5GB por archivo</p>
            </div>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-lg-12 mt-4">
            <h4 class="dashboard-titles">Carpetas Recientes</h4>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="folder-recent-card">
                <div class="icon-folder folder-blue">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                    </svg>
                </div>
                <div class="text-folder">
                    <h4>Marketing</h4>
                    <p>24 elementos · 3.2 GB</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="folder-recent-card">
                <div class="icon-folder folder-green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                    </svg>
                </div>
                <div class="text-folder">
                    <h4>Diseño</h4>
                    <p>8 elementos · 1.4 GB</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="folder-recent-card">
                <div class="icon-folder folder-amber">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                    </svg>
                </div>
                <div class="text-folder">
                    <h4>Finanzas</h4>
                    <p>12 elementos · 0.8 GB</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="folder-recent-card">
                <div class="icon-folder folder-rose">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                    </svg>
                </div>
                <div class="text-folder">
                    <h4>Recursos Humanos</h4>
                    <p>36 elementos · 5.1 GB</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-3 mt-3">
        <div class="col-lg-12">
            <div class="archive">
                <h3 class="dashboard-titles">Archivos</h3>
                <span>42 archivos</span>
            </div>
        </div>
        <div class="files-table-wrapper">
            <table class="files-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Propietario</th>
                        <th>Modificado</th>
                        <th>Tamaño</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="file-row">
                        <td>
                            <div class="file-name">
                                <span class="file-badge badge-pdf">PDF</span>
                                Propuesta_Q3.pdf
                            </div>
                        </td>
                        <td>
                            <div class="file-owner">
                                <div class="owner-avatar avatar-blue">MR</div>
                                María Ruiz
                            </div>
                        </td>
                        <td class="file-date">12 jun 2026</td>
                        <td class="file-size">2.4 MB</td>
                    </tr>
                    <tr class="file-row">
                        <td>
                            <div class="file-name">
                                <span class="file-badge badge-fig">FIG</span>
                                Identidad_Visual.fig
                            </div>
                        </td>
                        <td>
                            <div class="file-owner">
                                <div class="owner-avatar avatar-green">DS</div>
                                Diego Soto
                            </div>
                        </td>
                        <td class="file-date">11 jun 2026</td>
                        <td class="file-size">18.6 MB</td>
                    </tr>
                    <tr class="file-row">
                        <td>
                            <div class="file-name">
                                <span class="file-badge badge-xls">XLS</span>
                                Reporte_Ventas.xls
                            </div>
                        </td>
                        <td>
                            <div class="file-owner">
                                <div class="owner-avatar avatar-amber">AL</div>
                                Ana López
                            </div>
                        </td>
                        <td class="file-date">10 jun 2026</td>
                        <td class="file-size">860 KB</td>
                    </tr>
                    <tr class="file-row">
                        <td>
                            <div class="file-name">
                                <span class="file-badge badge-img">IMG</span>
                                Hero_Banner.png
                            </div>
                        </td>
                        <td>
                            <div class="file-owner">
                                <div class="owner-avatar avatar-green">DS</div>
                                Diego Soto
                            </div>
                        </td>
                        <td class="file-date">9 jun 2026</td>
                        <td class="file-size">4.1 MB</td>
                    </tr>
                    <tr class="file-row">
                        <td>
                            <div class="file-name">
                                <span class="file-badge badge-doc">DOC</span>
                                Contrato_Cliente.doc
                            </div>
                        </td>
                        <td>
                            <div class="file-owner">
                                <div class="owner-avatar avatar-blue">MR</div>
                                María Ruiz
                            </div>
                        </td>
                        <td class="file-date">8 jun 2026</td>
                        <td class="file-size">320 KB</td>
                    </tr>
                    <tr class="file-row">
                        <td>
                            <div class="file-name">
                                <span class="file-badge badge-zip">ZIP</span>
                                Assets_Web.zip
                            </div>
                        </td>
                        <td>
                            <div class="file-owner">
                                <div class="owner-avatar avatar-rose">LM</div>
                                Lucía Marín
                            </div>
                        </td>
                        <td class="file-date">6 jun 2026</td>
                        <td class="file-size">112 MB</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection