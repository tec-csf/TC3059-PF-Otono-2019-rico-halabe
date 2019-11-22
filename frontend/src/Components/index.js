import React, { Component } from 'react';
import { Tab, Tabs, TabList, TabPanel } from 'react-tabs';
import { Header, Loading, Footer } from './Common';
import { Home } from './Home';
import Quoting from './Quoting';
import { Contact } from './Contact';
import { Gallery } from './Gallery';
import './index.css';

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            menuOption: 0,
        };
    }

    onChangeAviso() {
        this.setState({ menuOption: 4 });
    }

    onChangeContacto() {
        this.setState({ menuOption: 3 });
    }

    onChangeCotizador() {
        this.setState({ menuOption: 1 });
    }

    renderContent() {
        switch (this.state.menuOption) {
            case 0:
                return (
                    <Home onChangeContacto={() => this.onChangeContacto()} onChangeCotizador={() => this.onChangeCotizador()}/>
                );
            case 1:
                return (
                    <Quoting />
                );
            case 2:
                return (
                    <Gallery />
                );
            case 3:
                return (
                    <Contact />
                );
            case 4:
                return (
                    <div className="container page-spacing" style={{ marginTop: 30 }}>
                        <div className="section-header" style={{ marginBottom: -30 }}>
                            <h3>Aviso de Privacidad</h3>
                        </div>
                        <p>Rentamarine,S.A de C.V. ("MiPecera"), con domicilio en Gutenberg 47a, Colonia Verónica Anzurez en la delegación Miguel Hidalgo, cp. 11300 en la Ciudad de México, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección.</p>

                        <p><strong>Datos personales que recabamos.</strong></p>
                        <p>MiPecera podrá recabar de usted los siguientes datos personales: nombre completo, domicilio, RFC, teléfono, teléfono celular, correo electrónico, número o folio de identificación oficial, y cualquier otro que sea necesario en virtud de los servicios que sean contratados.</p>

                        <p><strong>Uso de sus datos personales.</strong></p>
                        <p>Sus datos personales serán utilizados para las siguientes finalidades primarias: (i) proveer los servicios y productos requeridos por usted; (ii) informar sobre cambios o nuevos productos o servicios que estén relacionados con el contratado o adquirido por el cliente; (iii) dar cumplimiento a obligaciones contraídas con los clientes. Asimismo, serán utilizados para las siguientes finalidades secundarias: (i) evaluar la calidad del servicio; (ii) realizar estudios internos sobre hábitos de consumo; y (iii) enviarle ofertas, promociones o publicidad relacionadas con nuestros productos y servicios.</p>

                        <p><strong>Mensajes o correos publicitarios</strong></p>
                        <p>Usted puede dejar de recibir mensajes promocionales por teléfono fijo o celular, solicitándolo al teléfono 63930808 o mediante correo electrónico a operaciones@pecerasgratis.com Asimismo, puede dejar de recibir correo postal publicitario. El correo postal publicitario puede contener instrucciones para optar por no participar o puede dejar de recibir correo postal solicitándolo al teléfono 63930808 o mediante correo electrónico a operaciones@pecerasgratis.comTambién puede dejar de recibir correos electrónicos con promocionales solicitándolo al teléfono 63930808 o mediante correo electrónico a operaciones@pecerasgratis.com</p>

                        <p><strong>Acceso, Rectificación, Cancelación y Oposición de los datos personales.</strong></p>
                        <p>Usted tiene derecho de acceder a sus datos personales que poseemos y a los detalles del tratamiento de los mismos, así como a rectificarlos en caso de ser inexactos o incompletos; cancelarlos cuando considere que no se requieren para alguna de las finalidades señalados en el presente aviso de privacidad, estén siendo utilizados para finalidades no consentidas o haya finalizado la relación contractual o de servicio, o bien, oponerse al tratamiento de los mismos para fines específicos.</p>

                        <p>Para el ejercicio de dichos derechos deberá llamar al teléfono 63930808 o mediante correo electrónico a operaciones@pecerasgratis.com</p>

                        <p>Su solicitud deberá contener la siguiente información: (i) nombre completo, (ii) usuario, (iii) correo electrónico, y (iv) teléfono de contacto.</p>

                        <p>El plazo para atender su solicitud es de 10 días a partir de recibida.</p>

                        <p>Para mayor información, favor de comunicarse al departamento de privacidad al teléfono 63930808 o mediante correo electrónico a operaciones@pecerasgratis.com</p>

                        <p><strong>Revocación de consentimiento.</strong></p>
                        <p>En todo momento, usted podrá revocar el consentimiento que nos ha otorgado para el tratamiento de sus datos personales, a fin de que dejemos de hacer uso de los mismos.Para ello, es necesario que presente su petición a través de una llamada al teléfono 63930808 o mediante correo electrónico a operaciones@pecerasgratis.com Su petición deberá ir acompañada de la siguiente información: (i) nombre completo, (ii) usuario, (iii) correo electrónico, y (iv) teléfono de contacto. En un plazo máximo de 10 días atenderemos su petición y le informaremos sobre la procedencia de la misma a través del correo electrónico o teléfono de contacto que nos haya notificado.</p>

                        <p><strong>Transmisión de datos.</strong></p>
                        <p>Sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En ese sentido, su información puede ser compartida con firmas de abogados, prestadores de servicios de peritajes, prestadores de servicios de traducciones, agencias de publicidad, y aquellas empresas con giro similar o relacionado al giro de MiPecera, para los mismos fines principales y secundarios previstos en el presente aviso de privacidad.Si usted hace uso de la página www.pecerasgratis.com sin que manifieste su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello.</p>

                        <p><strong>Modificaciones al aviso de privacidad.</strong></p>
                        <p>Nos reservamos el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad. Estas modificaciones estarán disponibles al público a través de los siguientes medios: (i) anuncios visibles en nuestros establecimientos o centros de atención a clientes; (ii) trípticos o folletos disponibles en nuestros establecimientos o centros de atención a clientes; (iii) en nuestra página de Internet www.pecerasgratis.com sección aviso de privacidad; (iv) o se las haremos llegar al último correo electrónico que nos haya proporcionado.</p>

                        <p><strong>Cookies y web beacons.</strong></p>
                        <p>Las cookies son archivos de texto que son descargados automáticamente y almacenados en el disco duro del equipo de cómputo del usuario al navegar en una página de Internet específica, que permiten recordar al servidor de Internet algunos datos sobre este usuario, entre ellos, sus preferencias para la visualización de las páginas en ese servidor, nombre y contraseña. Por su parte, las web beacons son imágenes insertadas en una página de Internet o correo electrónico, que puede ser utilizado para monitorear el comportamiento de un visitante, como almacenar información sobre la dirección IP del usuario, duración del tiempo de interacción en dicha página y el tipo de navegador utilizado, entre otros.</p>

                        <p>Le informamos que utilizamos cookies y web beacons para obtener información personal de usted, como la siguiente:</p>
                        <ul>
                            <li>Su tipo de navegador y sistema operativo.</li>
                            <li>Las páginas de Internet que visita.</li>
                            <li>Los vínculos que sigue.</li>
                            <li>La dirección IP.</li>
                            <li>El sitio que visitó antes de entrar al nuestro.</li>
                            <li>Estas cookies y otras tecnologías pueden ser deshabilitadas.</li>
                        </ul>

                        <p><strong>Quejas y denuncias.</strong></p>
                        <p>Si usted considera que su derecho de protección de datos personales ha sido lesionado por alguna conducta de nuestros empleados o de nuestras actuaciones o respuestas, presume que en el tratamiento de sus datos personales existe alguna violación a las disposiciones previstas en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, podrá interponer la queja o denuncia correspondiente ante el IFAI, para mayor información visite www.ifai.org.mx.</p>
                    </div>
                );
            default:
                break;
        }
    }

    render () {
        return (
            <div>
                <header className="header container-fluid no-padding">
                    <div className="menu-block container-fluid no-pdding">
                        <div className="container">
                            <nav className="navbar ow-navigation">
                                <a id="nav-logo-1" className="navbar-brand" href="index.html" title="Logo"><img src={require('./Common/images/logo.png')} alt="Logo" style={{ width: 200, height: 80 }} /></a>
                                <div className="navbar-header">
                                    <button id="openCloseNav" type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                        <span className="sr-only">Toggle navigation</span>
                                        <span className="icon-bar"></span>
                                        <span className="icon-bar"></span>
                                        <span className="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="navbar" className="navbar-collapse collapse">
                                    <a id="nav-logo-2" className="navbar-brand" href="index.html" title="Logo"><img src={require('./Common/images/logo.png')} alt="Logo" style={{ width: 200, height: 80 }} /></a>
                                    <ul className="nav navbar-nav">
                                        <Tabs className="nav-tabContainer" selectedTabClassName="nav-tab-selected" selectedIndex={this.state.menuOption} onSelect={(index) => { this.setState({ menuOption: index }); }}>
                                            <TabList>
                                                <Tab className="nav-tabs-react"><a>INICIO</a></Tab>
                                                <Tab className="nav-tabs-react"><a>CREA TU PECERA</a></Tab>
                                                <Tab className="nav-tabs-react"><a>GALERÍA</a></Tab>
                                                <Tab className="nav-tabs-react"><a>CONTACTO</a></Tab>
                                                <Tab className="nav-tabs-react" disabled><a href="https://www.facebook.com/Rentamarine" title="¡Síguenos en Facebook!"><i className="fa fa-facebook"></i></a></Tab>
                                                <Tab className="nav-tabs-react" disabled><a href="mailto:operaciones@pecerasgratis.com" title="¡Contáctanos por correo electrónico!"><i className="fa fa-envelope"></i></a></Tab>
                                                <Tab className="nav-tabs-react" disabled><a href="tel:+52(55)63930808" title="¡Llámanos!" style={{ flexDirection: 'row' }}><i className="fa fa-phone" style={{ marginRight: 10 }}></i>55 6393 0808</a></Tab>
                                            </TabList>
                                            <TabPanel>
                                            </TabPanel>
                                            <TabPanel>
                                            </TabPanel>
                                            <TabPanel>
                                            </TabPanel>
                                            <TabPanel>
                                            </TabPanel>
                                            <TabPanel>
                                            </TabPanel>
                                            <TabPanel>
                                            </TabPanel>
                                            <TabPanel>
                                            </TabPanel>
                                        </Tabs>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </header>
                <Loading />
                {this.renderContent()}
                <Footer onClickAviso={() => this.onChangeAviso()}/>
            </div>
        );
    }
}

export default App;
