import React, { Component } from 'react';
import axios from 'axios';

class Footer extends Component {
    constructor(props) {
        super(props);
        this.state = {
            emailInput: '',
            showMessage: false,
        };

        this.handleChange = this.handleChange.bind(this);
    }

    handleChange(event) {
        this.setState({ emailInput: event.target.value });
    }

    renderLabel() {
        if (this.state.showMessage && this.state.emailInput) {
            return (
                <div class="alert alert-success"><label>¡Gracias por suscribirte! Te enviaremos correo con nuestras novedades.</label></div>
            );
        }
    }

    render() {
        const headers = {
                "Content-Type": "application/json",
                "Authorization": "&yBR31Z6a8jgppw6oK9si|If~nLiT{xdq)JeHS@qO/I<~7bxG(Uv25cih4m4bsK"
        };
        return (
            <footer className="footer-main container-fluid no-padding">
                <div className="container">
                    <div className="row">
                        <div className="col-md-3 col-sm-6 col-xs-6">
                            <aside className="ftr-widget location-widget">
                                <h3 className="widget-title"><i><img src={require('./images/ftr-location.png')} alt="Location" /></i><span>Dirección</span></h3>
                                <p>Gutemberg 47-A, Verónic Anzúres, 11300. CDMX, México</p>
                            </aside>
                        </div>
                        <div className="col-md-3 col-sm-6 col-xs-6">
                            <aside className="ftr-widget phone-widget">
                                <h3 className="widget-title"><i><img src={require('./images/ftr-phone.png')} alt="Location" /></i><span>Teléfono</span></h3>
                                <p><a href="tel:+525563930808" >+52 (55) 6393 0808</a></p>
                            </aside>
                        </div>
                        <div className="col-md-3 col-sm-6 col-xs-6">
                            <aside className="ftr-widget mail-widget">
                                <h3 className="widget-title"><i><img src={require('./images/ftr-email.png')} alt="Location" /></i><span>Correo Electrónico</span></h3>
                                <p><a href="mailto:operaciones@pecerasgratis.com">operaciones@pecerasgratis.com</a></p>
                            </aside>
                        </div>
                        <div className="col-md-3 col-sm-6 col-xs-6">
                            <aside className="ftr-widget hours-widget">
                                <h3 className="widget-title"><i><img src={require('./images/ftr-hours.png')} alt="Location" /></i><span>Horario de Trabajo</span></h3>
                                <p><span>Lun-Vie : 9:00 AM a 6:00 PM</span><span>Sab-Dom : Cerrado</span></p>
                            </aside>
                        </div>
                    </div>
                    <aside className="col-md-8 col-sm-6 col-xs-12 ftr-widget about-widget">
                        <h3 className="widget-title">Conoce MiPecera</h3>
                        <p>Mi Pecera te ofrece un servicio único, la renta y mantenimiento de peceras. Diseñamos bellos ambientes acuáticos, que generan un entorno armónico, combinando las bondades del agua: relajante natural, fuente de vida y acumulador de energía positiva. No tendrás que preocuparte por nada, nosotros lo hacemos por ti.</p>
                    </aside>
                    <aside className="col-md-4 col-sm-6 col-xs-12 ftr-widget newsleater-widget">
                        <h3 className="widget-title">Suscríbete al newsletter</h3>
                        <div className="search-box">
                            <div className="input-group">
                                <input type="text" className="form-control" placeholder="Correo Electrónico" value={this.state.emailInput}  onChange={this.handleChange} />
                                <span className="input-group-btn">
                                    <button className="btn btn-default" type="button" onClick={() => {axios.get('http://api.pecerasgratis.com/api/newsletter/' + this.state.emailInput, {headers} ); this.setState({ showMessage: true });}}>Suscribirme</button>
                                </span>
                            </div>
                        </div>
                        {this.renderLabel()}
                    </aside>

                    <div className="footer-bottom col-md-12 col-sm-12 col-xs-12 no-padding">
                        <div className="row">
                            <div className="col-md-5 col-sm-5 col-xs-6 copyright">
                                <p>&copy; Rentamarine 2018. Todos los derechos reservados. </p>
                            </div>
                            <div className="col-md-7 col-sm-7 col-xs-6">
                                <p className="avisoDePrivacidad" style={{ color: 'white', textAlign: 'right'}} onClick={this.props.onClickAviso}>Aviso de Privacidad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        );
    }
}

export { Footer };
