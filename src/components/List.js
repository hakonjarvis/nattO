import React from "react";
import camelcase from "camelcase";

import ListItem from "./ListItem";

const List = (props) => {
  const { title, data, labels } = props;

  return (
    <div className="list">
      <h1 className="title">{title}</h1>
      <ul>
        <li className="label">
          {labels.map((label) => (
            <span className={`label-${camelcase(label)}`} key={label}>
              {label}
            </span>
          ))}
        </li>
        {data.map((item, index) => (
          <ListItem
            key={`runner-${index}`}
            name={item.full_name}
            club={item.organisation_name}
            position={index + 1}
            points={Math.floor(Math.random() * 10000)}
          />
        ))}
      </ul>
    </div>
  );
};

export default List;
