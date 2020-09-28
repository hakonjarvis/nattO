export const formatRunners = (runners) => {
  return runners.map((runner) => {
    const fullName = runner.given_name + " " + runner.family_name;

    return {
      ...runner,
      full_name: fullName,
    };
  });
};
