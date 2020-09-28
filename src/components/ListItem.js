import React from "react";

const ListItem = (props) => {
  const { name, club, points, position } = props;

  return (
    <li>
      <div className="list-item">
        <span className="rank one">{position}</span>
        <div className="info">
          <span className="name">{name}</span>
          <span className="club">{club}</span>
        </div>
        <div className="points">
          <span className="point">{points}</span>
          <span className="trend up"></span>
        </div>
      </div>
      <div className="race-info"></div>
    </li>
  );
};

export default ListItem;
