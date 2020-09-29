import React from "react";
import { createUseStyles } from "react-jss";

const ListItem = (props) => {
  const { name, club, points, position } = props;
  const styles = useStyles();

  return (
    <li className={styles.listItemWrapper}>
      <div className={styles.listItem}>
        <span className={`${styles.rank} ${position && "one"} ${styles.span}`}>
          {position}
        </span>
        <div className={styles.info}>
          <span className={`${styles.name} ${styles.span}`}>{name}</span>
          <span className={`${styles.club} ${styles.span}`}>{club}</span>
        </div>
        <div className={styles.points}>
          <span className={`${styles.point} ${styles.span}`}>{points}</span>
          <span className={`${styles.trend} ${styles.span}`}></span>
        </div>
      </div>
      <div className="race-info"></div>
    </li>
  );
};

const useStyles = createUseStyles({
  listItemWrapper: {
    position: "relative",
    padding: 0,
    margin: 0,
    borderBottom: "1px solid #031133",
  },
  listItem: {
    display: "flex",
    backgroundColor: "rgba(0,0,0,0)",
    justifyContent: "space-between",
    zIndex: 10,
    padding: 10,
    transition: "all 0.5s ease",
    alignItems: "center",
    "&:hover, &:active": {
      transform: "scale(1.2)",
      backgroundColor: "#fedf84",
      borderRadius: 2,
      boxShadow: "rgba(0,0,0,0.2)",
    },
    "&:hover span, &.active span": {
      color: "#001546",
    },
    "&:hover .point, &.active .point": {
      color: "#faf9fb",
    },
  },
  span: {
    transition: "all 0.5s ease",
    color: "#faf9fb",
    fontFamily: '"Roboto", "Helvetica", "Arial", sans-serif',
  },
  rank: {
    fontFamily: '"Roboto", "Helvetica", "Arial", sans-serif',
    fontSize: 20,
    marginRight: 20,
    width: 20,
    "&.one:before": {
      content: "⭐",
      position: "absolute",
      transform: "scale(0)",
      left: -5,
      top: 10,
      transition: "all 0.5s ease",
    },
    "&.one:hover:before": {
      transform: "scale(1.2) rotate(200deg)",
      left: -28,
      top: 0,
    },
    "&.one:after": {
      content: "🥇",
      position: "absolute",
      transform: "scale(0)",
      transition: "all 0.5s ease",
      left: -5,
      top: 15,
    },
    "&.one:hover:after": {
      transform: "scale(1.4) rotate(-20deg)",
      left: -26,
      top: 25,
    },
  },
  info: {
    flex: 1,
    flexDirection: "column",
    display: "flex",
  },
  name: {
    marginRight: 10,
    marginBottom: 5,
  },
  club: {
    fontSize: 12,
    color: "#7785a3",
  },
  points: {
    display: "flex",
    alignItems: "center",
  },
  points: {
    background: "#750f83",
    padding: 5,
    borderRadius: 2,
    marginRight: 5,
    "&:after": {
      content: " pt",
      fontSize: 12,
      color: "#faf9fb",
    },
  },
  trend: {
    marginLeft: 7,
    "&.up": {
      width: 0,
      height: 0,
      borderLeft: "4px solid transparent",
      borderRight: "4px solid transparent",
      borderBottom: "7px solid #faf9fb",
    },
    ".down": {
      width: 0,
      height: 0,
      borderLeft: "4px solid transparent",
      borderRight: "4px solid transparent",
      borderTop: "7px solid #faf9fb",
    },
  },
});

export default ListItem;
