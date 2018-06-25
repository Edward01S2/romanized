import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {

    convertNum(e) {
        //console.log('Number');
        this.setState({inputValue:e.target.value})
        
        var num = e.target.value;

        var decimalValue = [ 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1 ];
        var romanNumeral = [ 'M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I' ];

        var romanized = '';

        for (var index = 0; index < decimalValue.length; index++) {
          while (decimalValue[index] <= num) {
            romanized += romanNumeral[index];
            num -= decimalValue[index];
          }
        }

        //console.log(romanized)

        this.setState({roman: romanized}, function () {
            //console.log(this.state.roman);
        });
    }

    render() {
        return (
            <div className="column is-half is-offset-one-quarter">
                <div className="field is-grouped">
                    <p className="control is-expanded">
                        <input className="input is-success has-text-centered input-font" type="number" name="convert" placeholder="24"/>
                    </p>
                    <div className="control">
                        <button type="submit" className="button is-primary input-font">Submit</button>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
