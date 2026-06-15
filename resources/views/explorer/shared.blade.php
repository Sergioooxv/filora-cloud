@extends('layouts.app')
@section('title', 'Compartido conmigo')

@section('content')
<section class="explorer-wrapper">

    {{-- Cabecera --}}
    <div class="explorer-header">
        <div class="explorer-header-left">
            @include('components.breadcrumb', [
                'breadcrumbs' => [
                    ['name' => 'Compartido conmigo', 'url' => route('shared')]
                ]
            ])
        </div>
        <div class="explorer-header-right">
            <div class="explorer-filters">
                <div class="dropdown">
                    <button class="filter-btn dropdown-toggle" data-bs-toggle="dropdown">
                        Tipo
                    </button>
                    <ul class="dropdown-menu filter-dropdown">
                        <li><a class="dropdown-item" href="#">Todos</a></li>
                        <li><a class="dropdown-item" href="#">Carpetas</a></li>
                        <li><a class="dropdown-item" href="#">Documentos</a></li>
                        <li><a class="dropdown-item" href="#">Imágenes</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="filter-btn dropdown-toggle" data-bs-toggle="dropdown">
                        Compartido por
                    </button>
                    <ul class="dropdown-menu filter-dropdown">
                        <li><a class="dropdown-item" href="#">Cualquiera</a></li>
                        <li><a class="dropdown-item" href="#">María Ruiz</a></li>
                        <li><a class="dropdown-item" href="#">Diego Soto</a></li>
                        <li><a class="dropdown-item" href="#">Ana López</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="filter-btn dropdown-toggle" data-bs-toggle="dropdown">
                        Fecha
                    </button>
                    <ul class="dropdown-menu filter-dropdown">
                        <li><a class="dropdown-item" href="#">Hoy</a></li>
                        <li><a class="dropdown-item" href="#">Esta semana</a></li>
                        <li><a class="dropdown-item" href="#">Este mes</a></li>
                    </ul>
                </div>
            </div>
            <div class="view-toggle">
                <button class="view-btn active" id="listView" title="Vista lista">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/>
                        <line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/>
                        <line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/>
                    </svg>
                </button>
                <button class="view-btn" id="gridView" title="Vista cuadrícula">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/>
                        <rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Compartidos recientes --}}
    <div class="explorer-section mb-4">
        <h5 class="explorer-section-title mb-3">Compartidos recientemente</h5>
        <div class="row g-3">
            <div class="col-lg-3 col-md-6">
                <div class="shared-card">
                    <div class="shared-card-icon folder-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <div class="shared-card-info">
                        <span class="shared-card-name">Campaña Q3</span>
                        <div class="shared-card-by">
                            <div class="owner-avatar avatar-blue" style="width:18px;height:18px;font-size:0.6rem;">MR</div>
                            <span>María Ruiz · Hoy</span>
                        </div>
                    </div>
                    <div class="shared-card-access">
                        <span class="access-badge access-edit">Editor</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="shared-card">
                    <div class="shared-card-icon folder-green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <div class="shared-card-info">
                        <span class="shared-card-name">Assets Diseño</span>
                        <div class="shared-card-by">
                            <div class="owner-avatar avatar-green" style="width:18px;height:18px;font-size:0.6rem;">DS</div>
                            <span>Diego Soto · Ayer</span>
                        </div>
                    </div>
                    <div class="shared-card-access">
                        <span class="access-badge access-view">Lector</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabla de todos los compartidos --}}
    <div class="explorer-section">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="explorer-section-title">Todos los archivos compartidos</h5>
            <span class="explorer-count">8 archivos</span>
        </div>
        <div class="files-table-wrapper">
            <table class="files-table">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="form-check-input"></th>
                        <th>Nombre</th>
                        <th>Compartido por</th>
                        <th>Fecha</th>
                        <th>Acceso</th>
                        <th>Tamaño</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="file-row">
                        <td><input type="checkbox" class="form-check-input"></td>
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
                        <td><span class="access-badge access-edit">Editor</span></td>
                        <td class="file-size">2.4 MB</td>
                        <td>
                            <div class="dropdown">
                                <button class="file-action-btn dropdown-toggle" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end file-menu">
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                        Descargar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                                        Añadir a Mi unidad
                                    </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg>
                                        Eliminar acceso
                                    </a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="file-row">
                        <td><input type="checkbox" class="form-check-input"></td>
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
                        <td><span class="access-badge access-view">Lector</span></td>
                        <td class="file-size">18.6 MB</td>
                        <td>
                            <div class="dropdown">
                                <button class="file-action-btn dropdown-toggle" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end file-menu">
                                    <li><a class="dropdown-item" href="#">Descargar</a></li>
                                    <li><a class="dropdown-item" href="#">Añadir a Mi unidad</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar acceso</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="file-row">
                        <td><input type="checkbox" class="form-check-input"></td>
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
                        <td><span class="access-badge access-comment">Comentador</span></td>
                        <td class="file-size">860 KB</td>
                        <td>
                            <div class="dropdown">
                                <button class="file-action-btn dropdown-toggle" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end file-menu">
                                    <li><a class="dropdown-item" href="#">Descargar</a></li>
                                    <li><a class="dropdown-item" href="#">Añadir a Mi unidad</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar acceso</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection