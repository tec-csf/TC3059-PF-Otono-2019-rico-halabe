import React, { Component } from 'react';
import './Home.css';

class Home extends Component {
    render() {
        return (
        	<main className="site-main page-spacing">
                <div id="accessories-section" className="accessories-section container-fluid no-padding">
                    <div className="section-padding"></div>
                    <div className="accessories-img-box col-md-10">
                        <div className="tab-content">
                            <div role="tabpanel" className="tab-pane active" id="wheels">
                                <div className="accessories-img img1"></div>
                            </div>
                            <div role="tabpanel" className="tab-pane" id="lure">
                                <div className="accessories-img img2"></div>
                            </div>
                            <div role="tabpanel" className="tab-pane" id="lines">
                                <div className="accessories-img img3"></div>
                            </div>
                            <div role="tabpanel" className="tab-pane" id="rods">
                                <div className="accessories-img img4"></div>
                            </div>
                            <div role="tabpanel" className="tab-pane" id="bags">
                                <div className="accessories-img img5"></div>
                            </div>
                            <div role="tabpanel" className="tab-pane" id="wheels1">
                                <div className="accessories-img img1"></div>
                            </div>
                        </div>
                    </div>

                    <div className="col-md-7 accessories-tab-box">
                        <div className="section-header">
                            <h3>ELIGE MI PECERA</h3>
                            <p>Conoce los beneficios de rentar tu pecera con nosotros</p>
                        </div>
                        <div className="nav nav-tabs" role="tablist">
                            <a href="#wheels" aria-controls="wheels" role="tab" data-toggle="tab" className="active">
                                <i><img src={require('./images/accessories/accessories-ic1.png')} alt="Accessories Icon" /></i>
                                <span>INSTALACIÓN</span><br /><br />
                                <span><small>Instalamos en tu domicilio o oficina de forma segura y profesional</small></span>
                            </a>
                            <a href="#lure" aria-controls="lure" role="tab" data-toggle="tab">
                                <i><img src={require('./images/accessories/accessories-ic2.png')} alt="Accessories Icon" /></i>
                                <span>MANTENIMIENTO</span><br /><br />
                                <span><small>Programamos visitas periodicas para limpieza y mantenimiento</small></span>
                            </a>
                            <a href="#lines" aria-controls="lines" role="tab" data-toggle="tab">
                                <i><img src={require('./images/accessories/accessories-ic3.png')} alt="Accessories Icon" /></i>
                                <span>ALIMENTO</span><br /><br />
                                <span><small>Te proveemos de una dotación de alimento para peces semanalmente</small></span>
                            </a>
                            <a href="#rods" aria-controls="rods" role="tab" data-toggle="tab">
                                <i><img src={require('./images/accessories/accessories-ic4.png')} alt="Accessories Icon" /></i>
                                <span>REPOSICIÓN</span><br /><br />
                                <span><small>Reponemos un pez en caso de que se requiera</small></span>
                            </a>
                            <a href="#bags" aria-controls="bags" role="tab" data-toggle="tab">
                                <i><img src={require('./images/accessories/accessories-ic5.png')} alt="Accessories Icon" /></i>
                                <span>AMBIENTE</span><br /><br />
                                <span><small>Te ayudamos a diseñar el ambiente acuático de tu pecera</small></span>
                            </a>
                            <a href="#wheels1" aria-controls="wheels1" role="tab" data-toggle="tab">
                                <i><img src={require('./images/accessories/accessories-ic1.png')} alt="Accessories Icon" /></i>
                                <span>ESPECIALISTAS</span><br /><br />
                                <span><small>Atención profesional veterinaria por nuestros especialistas</small></span>
                            </a>
                        </div>
                    </div>
                    <div className="section-padding"></div>
                </div>

                <div className="intro-section tr-border container-fluid no-padding">
        			<div className="container">
        				<div className="row">
        					<div className="col-md-4 col-sm-6 col-xs-6">
        						<div className="intro-content">
        							<i><img src={require('./images/intro/1.jpg')} alt="choose-1" /></i>
        							<h3>Compra tu Pecera</h3>
        							<p>Diseñamos bellos ambientes acuáticos, que generan un entorno armónico, combinando las bondades del agua: relajante natural, fuente de vida y acumulador de energía positiva. Instalamos en tu domicilio o oficina de forma segura y profesional.</p>
        						</div>
        					</div>
        					<div className="col-md-4 col-sm-6 col-xs-6">
        						<div className="intro-content">
        							<i><img src={require('./images/intro/2.jpg')} alt="choose-2" /></i>
        							<h3>Renta tu Pecera</h3>
        							<p>Te ayudamos a diseñar el ambiente acuático de tu pecera sin una inversión inicial. Contarás con atención profesional veterinaria por nuestros especialistas gracias a nuestros paquetes con mantenimiento incluido.</p>
        						</div>
        					</div>
        					<div className="col-md-4 col-sm-6 col-xs-6">
        						<div className="intro-content">
        							<i><img src={require('./images/intro/3.jpg')} alt="choose-3" /></i>
        							<h3>Mantenimiento de tu Pecera</h3>
        							<p>No tendrás que preocuparte por nada, nosotros lo hacemos por ti. Programamos visitas periódicas para limpieza y mantenimiento, te proveemos de una dotación de alimento semanal y reponemos los peces en caso de requerirlo.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div className="section-padding"></div>
        		</div>

        		<div className="photo-slider container-fluid no-padding">
        			<div id="main-carousel" className="carousel slide carousel-fade col-offset-2" data-ride="carousel">
        				<div className="carousel-inner" role="listbox">
        					<div className="item active">
        						<div className="slider-image">
        							<img src={require('./images/slider/2.jpg')} alt="slider-1"/>
        							<div className="carousel-caption">
        								<div className="container">
        									<h5>¡Bienvenido a Mi Pecera!</h5>
        									<h3>Limpieza y Mantenimiento <span>a Acuarios</span></h3>
        									<p>No tendrás que preocuparte por nada, nosotros lo hacemos por ti.</p>
        									<a title="Más Información" className="btn btn-default" onClick={this.props.onChangeCotizador}>Más Información</a>
        									<a title="Contáctanos" className="btn btn-default bg" onClick={this.props.onChangeContacto}>Contáctanos</a><br /><br /><br />
        								</div>
        							</div>
        						</div>
        					</div>
        					<div className="item">
        						<div className="slider-image">
        							<img src={require('./images/slider/3.jpg')} alt="slider-2"/>
        							<div className="carousel-caption">
        								<div className="container">
        									<h5>¡Bienvenido a Mi Pecera!</h5>
        									<h3>Servicio Profesional<span>A Casa u Oficina</span></h3>
        									<p>Mi Pecera te ofrece un servicio único, la renta y mantenimiento de peceras.</p>
        									<a title="Cotizar Pecera" className="btn btn-default bg" onClick={this.props.onChangeCotizador}>Cotizar Mi Pecera</a><br /><br /><br />
        								</div>
        							</div>
        						</div>
        					</div>
        					<div className="item">
        						<div className="slider-image">
        							<img src={require('./images/slider/4.jpg')} alt="slider-3"/>
        							<div className="carousel-caption">
        								<div className="container">
        									<h5>¡Bienvenido a Mi Pecera!</h5>
        									<h3>Disfruta de una pecera<span>Sin inversión inicial</span></h3>
        									<p>Bellos ambientes acuáticos, que generan un entorno armónico, combinando las bondades del agua: relajante natural, fuente de vida y acumulador de energía positiva.</p>
        									<a title="Learn More" className="btn btn-default bg" onClick={this.props.onChangeCotizador}>Más información</a><br /><br />
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        				<a className="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
        					<i className="fa fa-angle-left"></i>
        					<span className="sr-only">Previous</span>
        				</a>
        				<a className="right carousel-control" href="#main-carousel" role="button" data-slide="next">
        					<i className="fa fa-angle-right"></i>
        					<span className="sr-only">Next</span>
        				</a>
        			</div>
        		</div>

        		<div className="container-fluid no-padding team-section">
        			<div className="section-padding"></div>
        			<div className="container">
        				<div className="section-header">
        					<h3>Nuestras Peceras</h3>
        					<p>Contamos con diferentes formas y tamaños</p>
        				</div>
        				<div className="row">
        					<div className="col-md-3 col-sm-3 col-xs-6">
        						<div className="team-box">
        							<img src={require('./images/team/1.jpg')} alt="team1"/>
        							<div className="team-content">
        								<h3>PECERA MT 50</h3>
        								<span>45 X 49 X 49 CM</span><br />
        								<span>GABINETE DE 70 CM DE ALTO</span>
        							</div>
        							<div className="team-shape"></div>
        						</div>
        					</div>
        					<div className="col-md-3 col-sm-3 col-xs-6">
        						<div className="team-box">
        							<img src={require('./images/team/2.jpg')} alt="team1"/>
        							<div className="team-content">
        								<h3>PECERA EA 80</h3>
        								<span>80 X 40 X 54 CM</span><br />
        								<span>GABINETE DE 70 CM DE ALTO</span>
        							</div>
        							<div className="team-shape"></div>
        						</div>
        					</div>
        					<div className="col-md-3 col-sm-3 col-xs-6">
        						<div className="team-box">
        							<img src={require('./images/team/3.jpg')} alt="team1"/>
        							<div className="team-content">
        								<h3>PECERA EA 100</h3>
        								<span>100 X 40 X 56 CM</span><br />
        								<span>GABINETE DE 70 CM DE ALTO</span>
        							</div>
        							<div className="team-shape"></div>
        						</div>
        					</div>
        					<div className="col-md-3 col-sm-3 col-xs-6">
        						<div className="team-box">
        							<img src={require('./images/team/4.jpg')} alt="team1"/>
        							<div className="team-content">
        								<h3>PECERA EA 120</h3>
        								<span>120 X 40 X 60 CM</span><br />
        								<span>GABINETE DE 70 CM DE ALTO</span>
        							</div>
        							<div className="team-shape"></div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div className="section-padding"></div>
        		</div>
        	</main>
        );
    }
}

export { Home };
