import React from "react";
import { createUseStyles } from "react-jss";
import camelcase from "camelcase";

import ListItem from "./ListItem";

const List = (props) => {
  const { title, data, labels } = props;
  const styles = useStyles();

  return (
    <div className={styles.listWrapper}>
      <h1 className={styles.title}>{title}</h1>
      <ul className={styles.list}>
        <li className={styles.label}>
          {labels.map((label) => (
            <span
              className={`${styles.span} label-${camelcase(label)}`}
              key={label}
            >
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

const useStyles = createUseStyles({
  title: {
    color: "#fedf84",
    fontFamily: '"Roboto", "Helvetica", "Arial", sans-serif',
    textAlign: "center",
    fontSize: 60,
    letterSpacing: 2,
    textShadow: "4px 4px 0px #750f83",
  },
  listWrapper: {
    width: "100%",
    maxWidth: 600,
    minWidth: 400,
    margin: "0 20px",
  },
  list: {
    listStyle: "none",
    margin: 0,
    padding: 20,
    background: "#2c0357",
    borderRadius: 10,
    boxShadow: "0px 0px 20px rgba(0,0,0,0.2)",
    height: "auto",
  },
  label: {
    display: "flex",
    marginBottom: 10,
  },
  span: {
    textTransform: "uppercase",
    fontSize: 10,
    fontFamily: '"Roboto", "Helvetica", "Arial", sans-serif',
    color: "#faf9fb",
    "&.label-rank": {
      width: 47,
    },
    "&.label-nameClub": {
      flex: 1,
    },
    "&.label-points": {
      marginRight: 20,
    },
  },
});

export default List;
