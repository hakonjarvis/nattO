import React, { useState, useEffect } from "react";

import { get } from "../helpers/fetch";
import { formatRunners } from "../helpers/format";

import List from "../components/List";

const RunnersResultScreen = () => {
  const [data, setData] = useState(null);

  useEffect(() => {
    if (!data) {
      getData();
    }
  }, []);

  const getData = async () => {
    const result = await get("results");
    const formatedResult = formatRunners(result);
    setData(formatedResult.sort((a, b) => b.points - a.points));
  };

  if (!data) {
    return null;
  }

  return (
    <List
      title="King & Queen of the night"
      data={data}
      labels={["Rank", "Name/club", "Points"]}
    />
  );
};

export default RunnersResultScreen;
