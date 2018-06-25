import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Result extends Component {

    constructor(props){
        super(props);
    }

    render() {
        return (
            <div className="hero-body">
                <div className="container has-text-centered">
                    <h1 className="title result-text">From a # to a Roman numeral...</h1>
                    <p className="roman-text">
                        { JSON.parse(this.props.data) }
                    </p>
                    <p className="is-vertical-center">Click here to convert another number <a href="/" className="button is-primary is-outlined ml">Return</a></p>
                </div>
            </div>
        );
    }
}

if (document.getElementById('result')) {
    var data = document.getElementById('result').getAttribute('data');
    ReactDOM.render(<Result data={data} />, document.getElementById('result'));
 }
