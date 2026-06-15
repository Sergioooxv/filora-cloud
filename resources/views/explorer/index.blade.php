@extends('layouts.app')
@section('title', 'Mi Unidad')

@section('content')
<section class="explorer-wrapper">

    {{-- Cabecera --}}
    <div class="explorer-header">
        <div class="explorer-header-left">
            @include('components.breadcrumb', [
                'breadcrumbs' => [
                    ['name' => 'Mi unidad', 'url' => route('explorer')]
                ]
            ])
        </div>
        <div class="explorer-header-right">
            {{-- Filtros --}}
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
                        <li><a class="dropdown-item" href="#">Vídeos</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="filter-btn dropdown-toggle" data-bs-toggle="dropdown">
                        Modificado
                    </button>
                    <ul class="dropdown-menu filter-dropdown">
                        <li><a class="dropdown-item" href="#">Hoy</a></li>
                        <li><a class="dropdown-item" href="#">Esta semana</a></li>
                        <li><a class="dropdown-item" href="#">Este mes</a></li>
                        <li><a class="dropdown-item" href="#">Este año</a></li>
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="filter-btn dropdown-toggle" data-bs-toggle="dropdown">
                        Tamaño
                    </button>
                    <ul class="dropdown-menu filter-dropdown">
                        <li><a class="dropdown-item" href="#">Menos de 1 MB</a></li>
                        <li><a class="dropdown-item" href="#">1 MB — 100 MB</a></li>
                        <li><a class="dropdown-item" href="#">Más de 100 MB</a></li>
                    </ul>
                </div>
            </div>
            {{-- Vista --}}
            <div class="view-toggle">
                <button class="view-btn active" id="listView" title="Vista lista">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="8" y1="6" x2="21" y2="6"/>
                        <line x1="8" y1="12" x2="21" y2="12"/>
                        <line x1="8" y1="18" x2="21" y2="18"/>
                        <line x1="3" y1="6" x2="3.01" y2="6"/>
                        <line x1="3" y1="12" x2="3.01" y2="12"/>
                        <line x1="3" y1="18" x2="3.01" y2="18"/>
                    </svg>
                </button>
                <button class="view-btn" id="gridView" title="Vista cuadrícula">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"/>
                        <rect x="14" y="3" width="7" height="7"/>
                        <rect x="3" y="14" width="7" height="7"/>
                        <rect x="14" y="14" width="7" height="7"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Carpetas --}}
    <div class="explorer-section">
        <h5 class="dashboard-titles">Mis carpetas</h5>
        <div class="row g-3 mt-1">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="folder-card">
                    <div class="folder-card-icon folder-blue">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <div class="folder-card-info">
                        <span class="folder-card-name">Marketing</span>
                        <span class="folder-card-meta">24 elementos</span>
                    </div>
                    <div class="dropdown folder-card-menu">
                        <button class="file-action-btn dropdown-toggle" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu file-menu">
                            <li><a class="dropdown-item" href="#">Abrir</a></li>
                            <li><a class="dropdown-item" href="#">Compartir</a></li>
                            <li><a class="dropdown-item" href="#">Renombrar</a></li>
                            <li><a class="dropdown-item" href="#">Mover</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="folder-card">
                    <div class="folder-card-icon folder-green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <div class="folder-card-info">
                        <span class="folder-card-name">Diseño</span>
                        <span class="folder-card-meta">8 elementos</span>
                    </div>
                    <div class="dropdown folder-card-menu">
                        <button class="file-action-btn dropdown-toggle" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu file-menu">
                            <li><a class="dropdown-item" href="#">Abrir</a></li>
                            <li><a class="dropdown-item" href="#">Compartir</a></li>
                            <li><a class="dropdown-item" href="#">Renombrar</a></li>
                            <li><a class="dropdown-item" href="#">Mover</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="folder-card">
                    <div class="folder-card-icon folder-amber">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <div class="folder-card-info">
                        <span class="folder-card-name">Finanzas</span>
                        <span class="folder-card-meta">12 elementos</span>
                    </div>
                    <div class="dropdown folder-card-menu">
                        <button class="file-action-btn dropdown-toggle" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu file-menu">
                            <li><a class="dropdown-item" href="#">Abrir</a></li>
                            <li><a class="dropdown-item" href="#">Compartir</a></li>
                            <li><a class="dropdown-item" href="#">Renombrar</a></li>
                            <li><a class="dropdown-item" href="#">Mover</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="folder-card">
                    <div class="folder-card-icon folder-rose">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <div class="folder-card-info">
                        <span class="folder-card-name">Recursos Humanos</span>
                        <span class="folder-card-meta">36 elementos</span>
                    </div>
                    <div class="dropdown folder-card-menu">
                        <button class="file-action-btn dropdown-toggle" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="5" r="1"/><circle cx="12" cy="12" r="1"/><circle cx="12" cy="19" r="1"/>
                            </svg>
                        </button>
                        <ul class="dropdown-menu file-menu">
                            <li><a class="dropdown-item" href="#">Abrir</a></li>
                            <li><a class="dropdown-item" href="#">Compartir</a></li>
                            <li><a class="dropdown-item" href="#">Renombrar</a></li>
                            <li><a class="dropdown-item" href="#">Mover</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Archivos --}}
    <div class="explorer-section mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="dashboard-titles">Archivos</h5>
            <span class="explorer-count">42 archivos</span>
        </div>
        <div class="files-table-wrapper">
            <table class="files-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" class="form-check-input">
                        </th>
                        <th>Nombre</th>
                        <th>Propietario</th>
                        <th>Modificado</th>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                        Descargar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                                        Compartir
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        Destacar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                        Renombrar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                                        Mover
                                    </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/></svg>
                                        Eliminar
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                        Descargar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                                        Compartir
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        Destacar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                        Renombrar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                                        Mover
                                    </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/></svg>
                                        Eliminar
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                        Descargar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                                        Compartir
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        Destacar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                        Renombrar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                                        Mover
                                    </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/></svg>
                                        Eliminar
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                        Descargar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                                        Compartir
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        Destacar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                        Renombrar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                                        Mover
                                    </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/></svg>
                                        Eliminar
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                        Descargar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"/><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"/></svg>
                                        Compartir
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                                        Destacar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
                                        Renombrar
                                    </a></li>
                                    <li><a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                                        Mover
                                    </a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/></svg>
                                        Eliminar
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
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
                                    <li><a class="dropdown-item" href="#">Compartir</a></li>
                                    <li><a class="dropdown-item" href="#">Destacar</a></li>
                                    <li><a class="dropdown-item" href="#">Renombrar</a></li>
                                    <li><a class="dropdown-item" href="#">Mover</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item dropdown-item-danger" href="#">Eliminar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Estado vacío --}}
    {{-- @if($files->isEmpty())
    <div class="empty-state">
        <svg>...</svg>
        <h4>No hay archivos todavía</h4>
        <p>Sube tu primer archivo para empezar</p>
        <button class="btn auth-btn">Subir archivo</button>
    </div>
    @endif --}}

</section>
@endsection