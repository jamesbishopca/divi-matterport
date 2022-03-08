// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class DiviMatterportModule extends Component {

  static slug = 'dima_divi_matterport';

  render() {

    return (
      <Fragment>
        <iframe src="{this.props.matterport_link}" frameborder="0" allowfullscreen="allowfullscreen" title="matterport"></iframe>
      </Fragment>
    );
  }
}

export default DiviMatterportModule;
